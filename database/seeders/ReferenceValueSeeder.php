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
        DB::table('reference_values')->insert(
            array(
                'name' => 'Valor de descuento Infonavit 2021',
                'value' => '87.21',
                'year' => 2021,
                'created_at' => now()
            )
        );
        DB::table('reference_values')->insert(
            array(
                'name' => 'UMA',
                'value' => '89.62',
                'year' => 2021,
                'created_at' => now()
            )
        );
        DB::table('reference_values')->insert(
            array(
                'name' => 'Salario mínimo área genera',
                'value' => '141.7',
                'year' => 2021,
                'created_at' => now()
            )
        );
        DB::table('reference_values')->insert(
            array(
                'name' => 'Salario mínimo zona libre de la frontera',
                'value' => '213.4',
                'year' => 2021,
                'created_at' => now()
            )
        );
    }
}
