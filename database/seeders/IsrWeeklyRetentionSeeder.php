<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IsrWeeklyRetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        //        2021
        // Inserting data for each element of weeklyArray
        foreach ($weeklyArray as $element) {
            DB::table('isr_weekly_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2021,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]);
        }

        //        2022
        // Inserting data for each element of weeklyArray
        foreach ($weeklyArray as $element) {
            DB::table('isr_weekly_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2022,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]);
        }
    }
}
