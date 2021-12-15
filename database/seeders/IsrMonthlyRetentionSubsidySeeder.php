<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrMonthlyRetentionSubsidySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // filling array with table data
        $TenDaysArray = array(
            array(0.01, 0.01, 644.58, 0.00, 1.92, 407.02),
            array(644.59, 644.59, 1768.96, 12.38, 6.40, 407.02),
            array(644.59, 1768.97, 2653.38, 12.38, 6.40, 406.83),
            array(644.59, 2653.39, 3472.84, 12.38, 6.40, 406.62),
            array(644.59, 3472.85, 3537.87, 12.38, 6.40, 392.77),
            array(644.59, 3537.88, 4446.15, 12.38, 6.40, 382.46),
            array(644.59, 4446.16, 4717.18, 12.38, 6.40, 354.23),
            array(644.59, 4717.19, 5335.42, 12.38, 6.40, 324.87),
            array(644.59, 5335.43, 5470.92, 12.38, 6.40, 294.63),
            array(5470.93, 5470.93, 6224.67, 321.26, 10.88, 294.63),
            array(5470.93, 6224.68, 7113.90, 321.26, 10.88, 253.54),
            array(5470.93, 7113.91, 7382.33, 321.26, 10.88, 217.61),
            array(5470.93, 7382.34, 9614.66, 321.26, 10.88, 0.00),
            array(9614.67, 9614.67, 11176.62, 772.10, 16.00, 0.00),
            array(11176.63, 11176.63, 13381.47, 1022.01, 17.92, 0.00),
            array(13381.48, 13381.48, 26988.50, 1417.12, 21.36, 0.00),
            array(26988.51, 26988.51, 42537.58, 4323.58, 23.52, 0.00),
            array(42537.59, 42537.59, 81211.25, 7980.73, 30.00, 0.00),
            array(81211.26, 81211.26, 108281.67, 19582.83, 32.00, 0.00),
            array(108281.68, 108281.68, 324845.01, 28245.36, 34.00, 0.00),
            array(324845.02, 324845.02, 999999, 101876.90, 35.00, 0.00),
        );
        // Inserting data for each element of array
        foreach ($TenDaysArray as $element) {
            DB::table('isr_monthly_retention_subsidies')->insert([
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
