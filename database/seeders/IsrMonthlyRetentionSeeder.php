<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrMonthlyRetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // filling array with Monthly table data
        $weeklyArray = array(
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
        // Inserting data for each element of weeklyArray
        foreach ($weeklyArray as $element) {
            DB::table('isr_monthly_retentions')->insert([
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
            DB::table('isr_monthly_retentions')->insert([
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
