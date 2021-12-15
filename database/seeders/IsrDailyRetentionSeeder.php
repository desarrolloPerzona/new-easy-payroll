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
        DB::table('isr_daily_retentions')->insert([
            [
                'lower_limit' => 0.01,
                'upper_limit' => 21.20,
                'fixed_feed' => 0.00,
                'percentage_excess_to_lower_limit' => 1.92,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 21.21,
                'upper_limit' => 179.96,
                'fixed_feed' => 0.41,
                'percentage_excess_to_lower_limit' => 6.40,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 179.97,
                'upper_limit' => 316.27,
                'fixed_feed' => 10.57,
                'percentage_excess_to_lower_limit' => 10.88,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 316.28,
                'upper_limit' => 367.65,
                'fixed_feed' => 25.40,
                'percentage_excess_to_lower_limit' => 16.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 367.66,
                'upper_limit' => 440.18,
                'fixed_feed' => 33.62,
                'percentage_excess_to_lower_limit' => 17.92,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 440.19,
                'upper_limit' => 887.78,
                'fixed_feed' => 46.62,
                'percentage_excess_to_lower_limit' => 21.36,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 887.79,
                'upper_limit' => 1399.26,
                'fixed_feed' => 142.22,
                'percentage_excess_to_lower_limit' => 23.52,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 1399.27,
                'upper_limit' => 2671.42,
                'fixed_feed' => 262.52,
                'percentage_excess_to_lower_limit' => 30.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 2671.43,
                'upper_limit' => 3561.90,
                'fixed_feed' => 644.17,
                'percentage_excess_to_lower_limit' => 32.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 3561.91,
                'upper_limit' => 10685.69,
                'fixed_feed' => 929.12,
                'percentage_excess_to_lower_limit' => 34.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lower_limit' => 10685.70,
                'upper_limit' => 999999,
                'fixed_feed' => 3351.21,
                'percentage_excess_to_lower_limit' => 35.00,
                'year' => 2021,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


        ]);
    }
}
