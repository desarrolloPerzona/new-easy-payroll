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
        // filling array with daily table data
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

        //        2021 && 2022 values
        // filling array with Weekly table data
        $weeklyArray = array(
            array(0.01, 407.33, 93.73),
            array(407.34, 610.96, 93.66),
            array(610.97, 799.68, 93.66),
            array(799.69, 814.66, 90.44),
            array(814.67, 1023.75, 88.06),
            array(1023.76, 1086.19, 81.55),
            array(1086.20, 1228.57, 74.83),
            array(1228.58, 1433.32, 67.83),
            array(1433.33, 1638.07, 58.38),
            array(1638.08, 1699.88, 50.12),
            array(1699.89, 999999, 0),
        );

        $tenDaysArray = array(
            array(0.01, 581.9, 133.9),
            array(581.91, 872.8, 133.8),
            array(872.81, 1142.4, 133.8),
            array(1142.41, 1163.8, 129.2),
            array(1163.81, 1462.5, 125.8),
            array(1462.51, 1551.7, 116.5),
            array(1551.71, 1755.1, 106.9),
            array(1755.11, 2047.6, 96.9),
            array(2047.61, 2340.1, 83.4),
            array(2340.11, 2428.4, 71.6),
            array(2428.41, 999999, 0),
        );

        //        2021
        // Inserting data for each element of the Array
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

        //        2022
        // Inserting data for each element of the Array
        foreach ($weeklyArray as $element) {
            DB::table('isr_subsidies')->insert([
                [
                    'income_from' => $element[0],
                    'income_up_to' => $element[1],
                    'employment_subsidy' => $element[2],
                    'year' => 2022,
                    'subsidy_type' => 'weekly',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of the Array
        foreach ($tenDaysArray as $element) {
            DB::table('isr_subsidies')->insert([
                [
                    'income_from' => $element[0],
                    'income_up_to' => $element[1],
                    'employment_subsidy' => $element[2],
                    'year' => 2022,
                    'subsidy_type' => 'ten days',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }
    }
}
