<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReferenceValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reference_values')->insert([

//            2021 Reference values
            [
                'name' => 'Valor de descuento Infonavit 2021',
                'value' => '87.21',
                'year' => 2021,
                'created_at' => now()
            ],[
                'name' => 'UMA',
                'value' => '89.62',
                'year' => 2021,
                'created_at' => now()
            ],[
                'name' => 'Salario mínimo área general',
                'value' => '141.7',
                'year' => 2021,
                'created_at' => now()
            ],[
                'name' => 'Salario mínimo zona libre de la frontera',
                'value' => '213.4',
                'year' => 2021,
                'created_at' => now()
            ],

//            2022 Reference values
            [
                'name' => 'Valor de descuento Infonavit 2022',
                'value' => '91.56',
                'year' => 2022,
                'created_at' => now()
            ],[
                'name' => 'UMA',
                'value' => '96.22',
                'year' => 2022,
                'created_at' => now()
            ],[
                'name' => 'Salario mínimo área general',
                'value' => '172.87',
                'year' => 2022,
                'created_at' => now()
            ],[
                'name' => 'Salario mínimo zona libre de la frontera',
                'value' => '260.34',
                'year' => 2022,
                'created_at' => now()
            ]

        ]);
    }
}
