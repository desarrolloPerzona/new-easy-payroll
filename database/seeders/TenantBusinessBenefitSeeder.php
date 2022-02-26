<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantBusinessBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 1,
                'antiquity_to' => 1,
                'bonus_days' => 15,
                'vacation_days' => 6,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 2,
                'antiquity_to' => 2,
                'bonus_days' => 15,
                'vacation_days' => 8,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );
        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 3,
                'antiquity_to' => 3,
                'bonus_days' => 15,
                'vacation_days' => 10,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );
        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 4,
                'antiquity_to' => 4,
                'bonus_days' => 15,
                'vacation_days' => 14,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 5,
                'antiquity_to' => 9,
                'bonus_days' => 15,
                'vacation_days' => 14,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 10,
                'antiquity_to' => 14,
                'bonus_days' => 15,
                'vacation_days' => 16,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 15,
                'antiquity_to' => 19,
                'bonus_days' => 15,
                'vacation_days' => 16,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

        DB::table('tenant_business_benefits')->insert(
            array(
                'antiquity_from' => 15,
                'antiquity_to' => 19,
                'bonus_days' => 18,
                'vacation_days' => 8,
                'vacation_prime' => .25,
                'economical_days' => 0,
                'created_at' => now(),
            )
        );

    }
}
