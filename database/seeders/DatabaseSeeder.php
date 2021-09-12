<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            TenantSeeder::class,
            ZipCodeSeeder::class,
            RolesAndPermissionsSeeder::class,
            bankSeeder::class,
            IndustriesSeeder::class,
            FiscalRegimeSeeder::class,
        ]);

    }
}
