<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrDailyRetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
        // Inserting data for each element of dailyArray
        foreach ($dailyArray as $element) {
            DB::table('isr_daily_retentions')->insert([
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
        // Inserting data for each element of dailyArray
        foreach ($dailyArray as $element) {
            DB::table('isr_daily_retentions')->insert([
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
