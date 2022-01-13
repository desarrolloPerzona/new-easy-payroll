<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrBiWeeklyRetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        // Inserting data for each element of weeklyArray
        foreach ($biweeklyArray as $element) {
            DB::table('isr_bi_weekly_retentions')->insert([
                [
                    'lower_limit' => $element[0],
                    'upper_limit' => $element[1],
                    'fixed_feed' => $element[2],
                    'percentage_excess_to_lower_limit' => $element[3],
                    'year' => 2021,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        };
    }
}
