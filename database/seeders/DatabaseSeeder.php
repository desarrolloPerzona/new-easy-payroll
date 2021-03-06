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
            ZipCodeSeeder::class,
            RolesAndPermissionsSeeder::class,
            BusinessBranchSeeder::class,
            IndustriesSeeder::class,
            FiscalRegimeSeeder::class,
            BankSeeder::class,
            ReferenceValueSeeder::class,
            IsrRetentionsSeeder::class,
            IsrSubsidiesSeeder::class,
            IsnPayrollTaxesSeeder::class,
            OfficialFestiveDaySeeder::class,
            ByLawBenefitSeeder::class
        ]);

    }
}
