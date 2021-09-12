<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tenant = User::create([
                'name' => 'tenant',
                'last_name' => 'Tenant',
                'middle_name' => 'Easy Payroll',
                'tenancy_company' => 'Tenant Test Company',
                'tenancy_domain' => Str::slug('Tenant Test Company', '-'),
                'email' => 'tenant@c9sd.com',
                'is_admin' => 0,
                'password' => bcrypt('@password'),
                'created_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'terms' => true,
                'trial_ends_at' => now()->addDays(30),
      ]);


    }
}
