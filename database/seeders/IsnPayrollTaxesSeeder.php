<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsnPayrollTaxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('isn_payroll_taxes')->insert([
            [
                'state' => 'Aguascalientes',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2,
                'year' => 2022
            ],[
                'state' => 'Baja California',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3,
                'year' => 2022
            ],[
                'state' => 'Baja California Sur',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.50,
                'year' => 2022
            ],
        ]);
    }
}
