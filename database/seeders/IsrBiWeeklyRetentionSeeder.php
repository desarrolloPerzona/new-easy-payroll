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
        DB::table('isr_bi_weekly_retentions')->insert(
            array(
                'lower_limit' => 0.01,
                'upper_limit' => 21.20,
                'fixed_feed' => 0.00,
                'percentage_excess_to_lower_limit' => 1.92,
                'year' => 2021,
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('isr_bi_weekly_retentions')->insert(
            array(
                'lower_limit' => 0.01,
                'upper_limit' => 21.20,
                'fixed_feed' => 0.00,
                'percentage_excess_to_lower_limit' => 1.92,
                'year' => 2021,
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
    }
}
