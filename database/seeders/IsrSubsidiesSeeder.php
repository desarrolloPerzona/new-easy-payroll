<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrSubsidiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        2021 && 2022 values
        // filling array with Monthly table data
        $dailyArray = array(
            array(0.01, 58.19, 13.39),
            array(58.2, 87.28, 13.38),
            array(87.29, 114.24, 13.38),
            array(114.25, 116.38, 12.92),
            array(116.39, 146.25, 12.58),
            array(146.26, 155.17, 11.65),
            array(155.18, 175.51, 10.69),
            array(175.52, 204.76, 9.69),
            array(204.77, 234.01, 8.34),
            array(234.02, 242.84, 7.16),
            array(242.85, 999999, 0),
        );

        //        2021
        // Inserting data for each element of dailyArray
        foreach ($dailyArray as $element) {
            DB::table('isr_subsidies')->insert([
                [
                    'income_from' => $element[0],
                    'income_up_to' => $element[1],
                    'employment_subsidy' => $element[2],
                    'year' => 2022,
                    'subsidy_type' => 'daily',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }
    }
}
