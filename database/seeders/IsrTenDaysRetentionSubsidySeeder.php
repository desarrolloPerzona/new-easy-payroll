<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsrTenDaysRetentionSubsidySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // filling array with Teen Days table data
        $TenDaysArray = array(
            array(0.01, 0.01, 212.00, 0.00, 1.92, 133.90),
            array(212.01, 212.01, 581.90, 4.10, 6.40, 133.90),
            array(212.01, 581.91, 872.80, 4.10, 6.40, 133.80),
            array(212.01, 872.81, 1142.40, 4.10, 6.40, 133.80),
            array(212.01, 1142.41, 1163.80, 4.10, 6.40, 129.20),
            array(212.01, 1163.81, 1462.50, 4.10, 6.40, 125.80),
            array(212.01, 1462.51, 1551.70, 4.10, 6.40, 116.50),
            array(212.01, 1551.71, 1755.10, 4.10, 6.40, 106.90),
            array(212.01, 1755.11, 1799.60, 4.10, 6.40, 96.90),
            array(1799.61, 1799.61, 2047.60, 105.70, 10.88, 96.90),
            array(1799.61, 2047.61, 2340.10, 105.70, 10.88, 83.40),
            array(1799.61, 2340.11, 2428.40, 105.70, 10.88, 71.60),
            array(1799.61, 2428.41, 3162.70, 105.70, 10.88, 0.00),
            array(3162.71, 3162.71, 3676.50, 254.00, 16.00, 0.00),
            array(3676.51, 3676.51, 4401.80, 336.20, 17.92, 0.00),
            array(4401.81, 4401.81, 8877.80, 466.20, 21.36, 0.00),
            array(8877.81, 8877.81, 13992.60, 1422.20, 23.52, 0.00),
            array(13992.61, 13992.61, 26714.20, 2625.20, 30.00, 0.00),
            array(26714.21, 26714.21, 35619.00, 6441.70, 32.00, 0.00),
            array(35619.01, 35619.01, 106856.90, 9291.20, 34.00, 0.00),
            array(106856.91, 106856.91, 999999.00, 33512.10, 35.00, 0.00),

        );
        // Inserting data for each element of array
        foreach ($TenDaysArray as $element) {
            DB::table('isr_ten_days_retention_subsidies')->insert([
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
