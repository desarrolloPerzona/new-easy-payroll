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

        //        2021 && 2022 values
        // filling array with Ten days table data
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

        //        2021 && 2022 values
        // filling array with Biweekly table data
        $biWeeklyArray = array(
            array(0.01, 872.85, 200.85),
            array(872.86, 1309.20, 200.7),
            array(1309.21, 1713.60, 200.7),
            array(1713.61, 1745.70, 193.8),
            array(1745.71, 2193.75, 188.7),
            array(2193.76, 2327.55, 174.75),
            array(2327.56, 2632.65, 160.35),
            array(2632.66, 3071.40, 145.35),
            array(3071.41, 3510.15, 125.1),
            array(3510.16, 3642.60, 107.4),
            array(3642.61, 999999, 0),
        );

        //        2021 && 2022 values
        // filling array with Monthly table data
        $monthlyArray = array(
            array(0.01, 1768.96, 407.02),
            array(1768.97, 2653.38, 406.83),
            array(2653.39, 3472.840, 406.62),
            array(3472.85, 3537.87, 392.77),
            array(3537.88, 4446.15, 382.46),
            array(4446.16, 4717.18, 354.23),
            array(4717.19, 5335.42, 324.87),
            array(5335.43, 6224.67, 294.63),
            array(6224.68, 7113.90, 253.54),
            array(7113.91, 7382.33, 217.61),
            array(7382.34, 999999, 0),
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
                    'isr_subsidy_type' => 'daily',
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
                    'isr_subsidy_type' => 'weekly',
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
                    'isr_subsidy_type' => 'ten days',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of the Array
        foreach ($biWeeklyArray as $element) {
            DB::table('isr_subsidies')->insert([
                [
                    'income_from' => $element[0],
                    'income_up_to' => $element[1],
                    'employment_subsidy' => $element[2],
                    'year' => 2022,
                    'isr_subsidy_type' => 'biweekly',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of the Array
        foreach ($monthlyArray as $element) {
            DB::table('isr_subsidies')->insert([
                [
                    'income_from' => $element[0],
                    'income_up_to' => $element[1],
                    'employment_subsidy' => $element[2],
                    'year' => 2022,
                    'isr_subsidy_type' => 'monthly',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

    }
}
