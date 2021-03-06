<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                'name' => 'Super Admin',
                'email' => 'admin@c9sd.com',
                'is_admin' => 1,
                'password' => bcrypt('@password'),
                'created_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'terms' => true,
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'Sub Admin',
                'email' => 'sub-admin@c9sd.com',
                'is_admin' => 1,
                'password' => bcrypt('@password'),
                'created_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'terms' => true,
            )
        );

    }
}
