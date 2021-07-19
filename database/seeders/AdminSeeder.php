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
                'name' => 'Super',
                'last_name' => 'Admin',
                'middle_name' => '2021',
                'email' => 'admin@app.test',
                'role' => 0,
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'terms' => true,
            )
        );
    }
}
