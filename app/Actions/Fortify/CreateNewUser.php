<?php

namespace App\Actions\Fortify;

use App\Events\TenantHasSubscribe;
use App\Models\Tenant;
use App\Models\Tenant\Business;
use App\Models\Tenant\BusinessBranch;
use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'tenancy_company' => ['required', 'string', 'max:255'],
            'tenancy_domain' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        /**
         * CREATE USER
         */
        $user = User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'middle_name' => $input['middle_name'],
            'tenancy_company' => $input['tenancy_company'],
            'tenancy_domain' => Str::slug($input['tenancy_domain'], '-'),
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'terms' => true,
            'role' => 2,
            'is_admin' =>false,
            'trial_ends_at' => now()->addDays(30),
        ]);


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
                'last_name' => $user->last_name,
                'middle_name' => $user->middle_name,
                'tenancy_domain' => $user->tenancy_domain,
                'tenancy_company' => $user->tenancy_company,
                'email' => $user->email,
                'role' => $user->role,
                'password' => Hash::make($user->password),
                'terms' => 1,
                'trial_ends_at' => now()->addDays(30),
            ]);
        });

        $tenant->run(function ($user) {
            Business::create([
                'name' => $user->tenancy_company,
            ]);
        });

        $tenant->run(function ($user) {
            BusinessBranch::create([
                'business_id' => 1,
                'name' => $user->tenancy_company,
                'business_name' => $user->tenancy_company,

            ]);
        });



        $admin = User::find(1);

        $admin->notify(new NewUserNotification($user));

        return $user;
    }
}
