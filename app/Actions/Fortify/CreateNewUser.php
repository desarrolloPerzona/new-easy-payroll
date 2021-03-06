<?php

namespace App\Actions\Fortify;

use App\Models\Tenant;
use App\Models\Tenant\Branch;
use App\Models\Tenant\BranchImssPatronalRegister;
use App\Models\Tenant\Business;
use App\Models\Tenant\BranchBusiness;
use App\Models\Tenant\ImssPatronalRegister;
use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\jobs\CreateFrameworkDirectoriesForTenant;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        /**
         * VALIDATE INPUTS
         */

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'tenancy_company' => ['required', 'string', 'max:255'],
            'tenancy_domain' => ['required', 'string', 'max:255', 'unique:tenants'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        /**
         * CREATE USER
         */

        $user = User::create([
            'name' => $input['name'],
            'tenancy_company' => $input['tenancy_company'],
            'tenancy_domain' => Str::slug($input['tenancy_domain'], '-'),
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'terms' => true,
            'role' => 2,
            'is_admin' => 0,
        ]);

        /**
         * ADD USER TO STRIPE
         */


        /**
         * GIVE ROLE
         */

        $user->assignRole('Tenant');

        /**
         * CREATE THE TENANT IN
         */

        $tenant = Tenant::create($input + [
                'user_id' => $user->id,
                'ready' => false,
                'tenancy_company' => $user->tenancy_company,
                'tenancy_domain' => $user->tenancy_domain,
            ]);

        /**
         * CREATE TENANT DIRECTORY
         */
        $tenant->run(function () {
            $storage_path = storage_path();
            mkdir("$storage_path/framework/cache", 0777, true);
        });

        /**
         * CREATE THE TENANT DOMAIN
         */

        $tenant->domains()->create([
            'domain' => $tenant->tenancy_domain,
        ]);

        /**
         * FILL TENANT-ADMIN USER DATA
         */

        $tenant->run(function ($user) {
            User::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'tenancy_domain' => $user->tenancy_domain,
                'tenancy_company' => $user->tenancy_company,
                'email' => $user->email,
                'role' => $user->role,
                'password' => Hash::make($user->password),
                'terms' => 1,
                'trial_ends_at' => now()->addDays(30),
            ]);
        });


        /**
         * ADD FIRST BUSINESS
         */

        $tenant->run(function ($user) {
            Business::create([
                'name' => $user->tenancy_company,
            ]);
        });
        $tenant->run(function ($user) {
            Business::create([
                'name' => 'mi otra compa??ia',
                'sat_fiel_password' => 'mipassword'
            ]);
        });

        /**
         * ADD LOGO
         */

        /**
         * ADD FIRST BUSINESS - BRANCH
         */

        $tenant->run(function ($user) {
            Branch::create([
                'name' => $user->tenancy_company,
                'business_name' => $user->tenancy_company,
                'business_id' => 1

            ]);
        });

        $tenant->run(function ($user) {
            ImssPatronalRegister::create([
                'name' => 'Registro Patronal 1',
                'risk_premium' => '1.2',
                'business_id' => 2
            ]);
        });

        $tenant->run(function ($user) {
            BranchImssPatronalRegister::create([
                'branch_id' => 2,
                'imss_patronal_register_id' => 1,
            ]);
        });

        $tenant->run(function ($user) {
            Branch::create([
                'name' => 'branch de otra compa??ia',
                'business_name' => 'mi otra compa??ia',
                'business_id' => 2
            ]);
        });


        /**
         *
         */


        /**
         * NOTIFY SUPER ADMIN
         */

        $admin = User::find(1);
        $admin->notify(new NewUserNotification($user));

        return $user;
    }
}
