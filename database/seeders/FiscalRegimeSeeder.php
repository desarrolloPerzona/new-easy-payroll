<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiscalRegimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'General de Ley Personas Morales',
                'code' => '601',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Personas Morales con Fines no Lucrativos',
                'code' => '603',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Régimen de Enajenación o Adquisición de Bienes',
                'code' => '607',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Consolidación',
                'code' => '609',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Sociedades Cooperativas de Producción que optan por Diferir sus Ingresos',
                'code' => '620',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras',
                'code' => '622',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Opcional para Grupos de Sociedades',
                'code' => '623',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Coordinados',
                'code' => '624',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Hidrocarburos',
                'code' => '628',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Sueldos y Salarios e Ingresos Asimilados a Salarios',
                'code' => '605',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Arrendamiento',
                'code' => '606',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Demás ingresos',
                'code' => '608',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Ingresos por Dividendos (socios y accionistas)',
                'code' => '611',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Personas Físicas con Actividades Empresariales y Profesionales',
                'code' => '612',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Ingresos por intereses',
                'code' => '614',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Régimen de los ingresos por obtención de premios',
                'code' => '615',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Sin obligaciones fiscales',
                'code' => '616',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Incorporación Fiscal',
                'code' => '621',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales',
                'code' => '629',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('fiscal_regimes')->insert(
            array(
                'name' => 'Enajenación de acciones en bolsa de valores',
                'code' => '630',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
    }
}
