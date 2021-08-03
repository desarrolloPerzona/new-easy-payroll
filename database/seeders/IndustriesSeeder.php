<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industries')->insert(
            array(
                'name' => 'Siembra, cultivo y cosecha de soya',
                'code' => '1',
                'description' => 'Siembra, cultivo y cosecha de soya',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Construcción de obras para el tratamiento, distribución y suministro de agua y drenaje',
                'code' => '1',
                'description' => 'Construcción de obras para el tratamiento, distribución y suministro de agua y drenaje',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Elaboración y refinación de azúcar de caña',
                'code' => '1',
                'description' => 'Elaboración y refinación de azúcar de caña',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Elaboración y refinación de azúcar de caña',
                'code' => '1',
                'description' => 'Elaboración y refinación de azúcar de caña',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => '9 Preparación e hilado de fibras blandas',
                'code' => '1',
                'description' => '9 Preparación e hilado de fibras blandas',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Preparación e hilado de fibras blandas',
                'code' => '1',
                'description' => 'Preparación e hilado de fibras blandas',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Tejido de ropa exterior de punto',
                'code' => '1',
                'description' => 'Tejido de ropa exterior de punto',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Fabricación de muebles de oficina y estantería',
                'code' => '1',
                'description' => 'Fabricación de muebles de oficina y estantería',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Comercio de bebidas saborizadas con azúcares añadidos',
                'code' => '1',
                'description' => 'Comercio de bebidas saborizadas con azúcares añadidos',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Comercio al por mayor de materiales metálicos ',
                'code' => '1',
                'description' => 'Comercio al por mayor de materiales metálicos ',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Otros intermediarios de comercio al por mayor',
                'code' => '1',
                'description' => 'Otros intermediarios de comercio al por mayor',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Otros intermediarios de comercio al por mayor',
                'code' => '1',
                'description' => 'Otros intermediarios de comercio al por mayor',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Notarios o corredores públicos',
                'code' => '1',
                'description' => 'Notarios o corredores públicos',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Servicios de psicología',
                'code' => '1',
                'description' => 'Servicios de psicología',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Compañías de teatro del sector privado',
                'code' => '1',
                'description' => 'Compañías de teatro del sector privado',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('industries')->insert(
            array(
                'name' => 'Administración pública federal en general ',
                'code' => '1',
                'description' => 'Administración pública federal en general ',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
    }
}
