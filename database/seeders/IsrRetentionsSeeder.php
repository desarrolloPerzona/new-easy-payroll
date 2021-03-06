<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrRetentionsSeeder extends Seeder
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
            array(0.01, 21.2, 0.00, 1.92),
            array(21.21, 179.96, 0.41, 6.40),
            array(179.97, 316.27, 10.57, 10.88),
            array(316.28, 367.65, 25.4, 16.00),
            array(367.66, 440.18, 33.62, 17.92),
            array(440.19, 887.78, 46.62, 21.36),
            array(887.79, 1399.26, 142.22, 23.52),
            array(1399.27, 2671.42, 262.52, 30.00),
            array(2671.43, 3561.90, 644.17, 32.00),
            array(3561.91, 10685.69, 929.12, 34.00),
            array(10685.70, 999999, 3351.21, 35.00),

        );

        //        2021 and 2022 values
        // filling array with Weekly table data
        $weeklyArray = array(
            array(0.01, 148.4, 0.00, 1.92),
            array(148.41, 1259.72, 2.87, 6.40),
            array(1259.73, 2213.89, 73.99, 10.88),
            array(2213.90, 2573.55, 177.8, 16.00),
            array(2573.56, 3081.26, 235.34, 17.92),
            array(3081.27, 6214.46, 326.34, 21.36),
            array(6214.47, 9794.82, 995.54, 23.52),
            array(9794.83, 18699.94, 1837.64, 30.00),
            array(18699.95, 24933.30, 4509.19, 32.00),
            array(24933.31, 74799.83, 6503.84, 34.00),
            array(74799.84, 999999, 23458.47, 35.00),
        );

        //        2021 and 2022 values
        // filling array with table data
        $tenDaysArray = array(
            array(0.01, 212.00, 0.00, 1.92),
            array(212.01, 1799.60, 4.10, 6.40),
            array(1799.61, 3162.70, 105.70, 10.88),
            array(3162.71, 3676.50, 254.00, 16.00),
            array(3676.51, 4401.80, 336.20, 17.92),
            array(4401.81, 8877.80, 466.20, 21.36),
            array(8877.81, 13992.60, 1422.20, 23.52),
            array(13992.61, 26714.20, 2625.20, 30.00),
            array(26714.21, 35619.00, 6441.70, 32.00),
            array(35619.01, 106856.90, 9291.20, 34.00),
            array(106856.91, 999999, 33512.10, 35.00),
        );
        //        2021 and 2022 values
        // filling array with table data
        $biweeklyArray = array(
            array(0.01, 318.00, 0.00, 1.92),
            array(318.01, 2699.40, 6.15, 6.40),
            array(2699.41, 4744.05, 158.55, 10.88),
            array(4744.06, 5514.75, 381.00, 16.00),
            array(5514.76, 6602.70, 504.30, 17.92),
            array(6602.71, 13316.70, 699.30, 21.36),
            array(13316.71, 20988.90, 2133.30, 23.52),
            array(20988.91, 40071.30, 3937.80, 30.00),
            array(40071.31, 53428.50, 9662.55, 32.00),
            array(53428.51, 160285.35, 13936.80, 34.00),
            array(160285.36, 999999.00, 50268.15, 35.00),

        );

        // filling array with Monthly table data
        $monthlyArray = array(
            array(0.01, 644.58, 0.00, 1.92),
            array(644.59, 5470.92, 12.38, 6.40),
            array(5470.93, 9614.66, 321.26, 10.88),
            array(9614.67, 11176.62, 772.10, 16.00),
            array(11176.63, 13381.47, 1022.01, 17.92),
            array(13381.48, 26988.50, 1417.12, 21.36),
            array(26988.51, 42537.58, 4323.58, 23.52),
            array(42537.59, 81211.25, 7980.73, 30.00),
            array(81211.26, 108281.67, 19582.83, 32.00),
            array(108281.68, 324845.01, 28245.36, 34.00),
            array(324845.02, 999999, 101876.90, 35.00),

        );

        //        2021
        // Inserting data for each element of dailyArray
        foreach ($dailyArray as $element) {
            DB::table('isr_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'isr_retention_type' => 'daily',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of weeklyArray
        foreach ($weeklyArray as $element) {
            DB::table('isr_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'isr_retention_type' => 'weekly',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of array
        foreach ($tenDaysArray as $element) {
            DB::table('isr_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'isr_retention_type' => 'ten days',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of biweeklyArray
        foreach ($biweeklyArray as $element) {
            DB::table('isr_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'isr_retention_type' => 'biweekly',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of monthlyArray
        foreach ($monthlyArray as $element) {
            DB::table('isr_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'isr_retention_type' => 'monthly',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }

    }
}
