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
        DB::table('isr_weekly_retentions')->insert([
            [
                'lower_limit' => 0.01,
                'upper_limit' => 148.40,
                'fixed_feed' => 0.00,
                'percentage_excess_to_lower_limit' => 1.92,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 148.41,
                'upper_limit' => 1259.72,
                'fixed_feed' => 2.87,
                'percentage_excess_to_lower_limit' => 6.40,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 1259.73,
                'upper_limit' => 2213.89,
                'fixed_feed' => 73.99,
                'percentage_excess_to_lower_limit' => 10.88,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 2213.90,
                'upper_limit' => 2573.55,
                'fixed_feed' => 177.8,
                'percentage_excess_to_lower_limit' => 16.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 2573.56,
                'upper_limit' => 3081.26,
                'fixed_feed' => 235.34,
                'percentage_excess_to_lower_limit' => 17.92,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 3081.27,
                'upper_limit' => 6214.46,
                'fixed_feed' => 326.34,
                'percentage_excess_to_lower_limit' => 21.36,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 6214.47,
                'upper_limit' => 9794.82,
                'fixed_feed' => 995.54,
                'percentage_excess_to_lower_limit' => 23.52,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 9794.83,
                'upper_limit' => 18699.94,
                'fixed_feed' => 1837.64,
                'percentage_excess_to_lower_limit' => 30.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 18699.95,
                'upper_limit' => 24933.30,
                'fixed_feed' => 4509.19,
                'percentage_excess_to_lower_limit' => 32.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 24933.31,
                'upper_limit' => 74799.83,
                'fixed_feed' => 6503.84,
                'percentage_excess_to_lower_limit' => 34.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 74799.84,
                'upper_limit' => 999999,
                'fixed_feed' => 23458.47,
                'percentage_excess_to_lower_limit' => 35.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
