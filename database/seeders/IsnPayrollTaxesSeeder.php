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
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Baja California',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Baja California Sur',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.50,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Chiapas',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Chihuahua',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Coahuila',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Colima',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'CDMX',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Durango',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Estado de México',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Guanajuato',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.30,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Guerrero',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Jalisco',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Michoacán',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Morelos',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Nayarit',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Nuevo León',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Oaxaca',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Puebla',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Querétaro',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Quintana Roo',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'San Luis Potosí',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.50,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Sonora',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Tabasco',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.50,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Tamaulipas',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Tlaxcala',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Veracruz',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Yucatán',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 3.00,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'state' => 'Zacatecas',
                'lower_limit' => 0,
                'upper_limit' => 999999,
                'fixed_fee' => 0,
                'lower_limit_surplus_percentage' => 2.50,
                'year' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);

        $campecheArray = array(
            array(0.01, 252625.00, 0, 2.00),
            array(252626.00, 525752.00, 5052.50, 2.20),
            array(525753.00, 2520124.00, 11061.27, 2.40),
            array(2520125.00, 5207421.00, 58926.18, 2.60),
            array(5207422.00, 8559929.00, 128795.87, 2.80),
            array(8559930.00, 999999, 222666.07, 3.00),
        );

        $hidalgoArray = array(
            array(0.01, 500000.00, 0, 0.50),
            array(500000.01, 600000.00, 2500.01, 1.50),
            array(600000.01, 700000.00, 4000.02, 1.60),
            array(700000.01, 800000.00, 5600.03, 1.70),
            array(800000.01, 900000.00, 7300.04, 1.80),
            array(900000.01, 1000000.00, 9100.45, 1.90),
            array(1000000.01, 999999, 11000.06, 2.00),
        );

        $sinaloaArray = array(
            array(0.01, 500000.00, 0, 2.40),
            array(500000.01, 700000.00, 0, 2.60),
            array(700000.01, 900000.00, 0, 2.80),
            array(900000.01, 999999, 0, 3.00),
        );

        //        2022
        foreach ($campecheArray as $element) {
            DB::table('isn_payroll_taxes')->insert([
                [
                    'state' => 'Campeche',
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_fee' => $element[2],
                    'lower_limit_surplus_percentage' => $element[3],
                    'year' => 2022,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        foreach ($hidalgoArray as $element) {
            DB::table('isn_payroll_taxes')->insert([
                [
                    'state' => 'Hidalgo',
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_fee' => $element[2],
                    'lower_limit_surplus_percentage' => $element[3],
                    'year' => 2022,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        foreach ($sinaloaArray as $element) {
            DB::table('isn_payroll_taxes')->insert([
                [
                    'state' => 'Sinaloa',
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_fee' => $element[2],
                    'lower_limit_surplus_percentage' => $element[3],
                    'year' => 2022,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

    }
}
