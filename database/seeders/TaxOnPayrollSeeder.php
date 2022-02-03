<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxOnPayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tax_on_payrolls')->insert(
            array(
                'state' => 'aguascalientes',
                'value' => '87.21',
                'year' => 2021,
                'created_at' => now()
            )
        );
    }
}
