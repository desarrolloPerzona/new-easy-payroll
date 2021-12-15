<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrBiWeeklyRetentionSubsidySeeder extends Seeder
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
            array(0.01, 0.01, 318.00, 0.00, 1.92, 200.85),
            array(318.01, 318.01, 872.85, 6.15, 6.40, 200.85),
            array(318.01, 872.86, 1309.20, 6.15, 6.40, 200.70),
            array(318.01, 1309.21, 1713.60, 6.15, 6.40, 200.70),
            array(318.01, 1713.61, 1745.70, 6.15, 6.40, 193.80),
            array(318.01, 1745.71, 2193.75, 6.15, 6.40, 188.70),
            array(318.01, 2193.76, 2327.55, 6.15, 6.40, 174.75),
            array(318.01, 2327.56, 2632.65, 6.15, 6.40, 160.35),
            array(318.01, 2632.66, 2699.40, 6.15, 6.40, 145.35),
            array(2699.41, 2699.41, 3071.40, 158.55, 10.88, 145.35),
            array(2699.41, 3071.41, 3510.15, 158.55, 10.88, 125.10),
            array(2699.41, 3510.16, 3642.60, 158.55, 10.88, 107.40),
            array(2699.41, 3642.61, 4744.05, 158.55, 10.88, 0.00),
            array(4744.06, 4744.06, 5514.75, 381.00, 16.00, 0.00),
            array(5514.76, 5514.76, 6602.70, 504.30, 17.92, 0.00),
            array(6602.71, 6602.71, 13316.70, 699.30, 21.36, 0.00),
            array(13316.71, 13316.71, 20988.90, 2133.30, 23.52, 0.00),
            array(20988.91, 20988.91, 40071.30, 3937.80, 30.00, 0.00),
            array(40071.31, 40071.31, 53428.50, 9662.55, 32.00, 0.00),
            array(53428.51, 53428.51, 160285.35, 13936.80, 34.00, 0.00),
            array(160285.36, 160285.36, 999999, 50268.15, 35.00, 0.00),
        );
        // Inserting data for each element of weeklyArray
        foreach ($biweeklyArray as $element) {
            DB::table('isr_bi_weekly_retention_subsidies')->insert([
                [
                    'lower_limit' => $element[0],
                    'lower_limit_2' => $element[1],
                    'upper_limit' => $element[2],
                    'fixed_feed' => $element[3],
                    'percentage_excess_to_lower_limit' => $element[4],
                    'subsidy_for_employment' => $element[5],
                    'year' => 2021,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]
            ]);
        };
    }
}
