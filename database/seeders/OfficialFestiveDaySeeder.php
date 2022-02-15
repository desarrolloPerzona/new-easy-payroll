<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficialFestiveDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('official_festive_days')->insert([
            [
                'name' => 'Año nuevo',
                'date' => Carbon::create(2022, 1, 01),
            ],[
                'name' => 'Día de la Constitución Mexicana',
                'date' => Carbon::create(2022, 2, 05),
            ],[
                'name' => 'Natalicio de Benito Juárez',
                'date' => Carbon::create(2022, 3, 21),
            ],[
                'name' => 'Día del trabajo',
                'date' => Carbon::create(2022, 5, 01),
            ],[
                'name' => 'Día de la Independencia',
                'date' => Carbon::create(2022, 9, 16),
            ],[
                'name' => 'Día de la Revolución',
                'date' => Carbon::create(2022, 11, 20),
            ],[
                'name' => 'Navidad',
                'date' => Carbon::create(2022, 12, 25),
            ]
        ]);
    }
}
