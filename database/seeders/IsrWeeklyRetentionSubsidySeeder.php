<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrWeeklyRetentionSubsidySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // filling array with weekly table data
        $weeklyArray = array(
            array(0.01, 0.01, 148.4, 0.00, 1.92, 93.73),
            array(148.41, 148.41, 407.33, 2.87, 6.40, 93.73),
            array(148.41, 407.34, 610.96, 2.87, 6.40, 93.66),
            array(148.41, 610.97, 799.68, 2.87, 6.40, 93.66),
            array(148.41, 799.69, 814.66, 2.87, 6.40, 90.44),
            array(148.41, 814.67, 1023.75, 2.87, 6.40, 88.06),
            array(148.41, 1023.76, 1086.19, 2.87, 6.40, 81.55),
            array(148.41, 1086.20, 1228.57, 2.87, 6.40, 74.83),
            array(148.41, 1228.58, 1259.72, 2.87, 6.40, 67.83),
            array(1259.73, 1259.73, 1433.32, 73.99, 10.88, 67.83),
            array(1259.73, 1433.33, 1638.07, 73.99, 10.88, 58.38),
            array(1259.73, 1638.08, 1699.88, 73.99, 10.88, 50.12),
            array(1259.73, 1699.89, 2213.89, 73.99, 10.88, 0.00),
            array(2213.90, 2213.90, 2573.55, 177.8, 16.00, 0.00),
            array(2573.56, 2573.56, 3081.26, 235.34, 17.92, 0.00),
            array(3081.27, 3081.27, 6214.46, 326.34, 21.36, 0.00),
            array(6214.47, 6214.47, 9794.82, 995.54, 23.52, 0.00),
            array(9794.83, 9794.83, 18699.94, 1837.64, 30.00, 0.00),
            array(18699.95, 18699.95, 24933.30, 4509.19, 32.00, 0.00),
            array(24933.31, 24933.31, 74799.83, 6503.84, 34.00, 0.00),
            array(74799.84, 74799.84, 999999, 23458.47, 35.00, 0.00),
        );
        // Inserting data for each element of weeklyArray
        foreach ($weeklyArray as $element) {
            DB::table('isr_weekly_retention_subsidies')->insert([
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
