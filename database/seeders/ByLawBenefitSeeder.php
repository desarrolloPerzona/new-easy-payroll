<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ByLawBenefitSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 1 to 2 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 1,
                'antiquity_to' => 2,
                'bonus_days' => 15,
                'vacation_days' => 6,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 2 to 3 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 2,
                'antiquity_to' => 3,
                'bonus_days' => 15,
                'vacation_days' => 8,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 3 to 4 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 3,
                'antiquity_to' => 3,
                'bonus_days' => 15,
                'vacation_days' => 10,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 4  to 5 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 4,
                'antiquity_to' => 4,
                'bonus_days' => 15,
                'vacation_days' => 12,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 5 to 9 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 5,
                'antiquity_to' => 9,
                'bonus_days' => 15,
                'vacation_days' => 14,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 10 to 14 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 10,
                'antiquity_to' => 14,
                'bonus_days' => 15,
                'vacation_days' => 16,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 15 to 19 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 15,
                'antiquity_to' => 19,
                'bonus_days' => 15,
                'vacation_days' => 18,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 20 to 24 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 20,
                'antiquity_to' => 24,
                'bonus_days' => 15,
                'vacation_days' => 20,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

        /**
         * 25 to 25 year
         */
        DB::table('by_law_benefits')->insert(
            array(
                'antiquity_from' => 25,
                'antiquity_to' => null,
                'bonus_days' => 15,
                'vacation_days' => 22,
                'vacation_prime' => .25,
                'year' => 2020,
                'created_at' => now(),
            )
        );

    }

}
