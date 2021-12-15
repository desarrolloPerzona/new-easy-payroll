<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IsrTenDaysRetentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        // Inserting data for each element of array
        foreach ($tenDaysArray as $element) {
            DB::table('isr_ten_days_retentions')->insert([
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
        };
    }
}
