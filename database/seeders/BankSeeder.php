<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(
            array(
                'name' => 'ABC CAPITAL',
                'institutional_key' => '40138',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'ACENDO BANK',
                'institutional_key' => '40102',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'ACTINVER',
                'institutional_key' => '40133',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'AFIRME',
                'institutional_key' => '40062',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'AKALA',
                'institutional_key' => '90638',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'AMERICAN EXPRESS',
                'institutional_key' => '40103',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'ASP INTEGRA OPC',
                'institutional_key' => '90659',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'AUTOFIN',
                'institutional_key' => '40128',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'AZTECA',
                'institutional_key' => '40127',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BAJIO',
                'institutional_key' => '40030',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANAMEX',
                'institutional_key' => '40002',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANCO FINTERRA',
                'institutional_key' => '40154',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANCO BANCOMEXT',
                'institutional_key' => '37006',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANCOPPEL',
                'institutional_key' => '40137',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANCO S3',
                'institutional_key' => '40160',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANCREA',
                'institutional_key' => '40152',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANJERCITO',
                'institutional_key' => '37019',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANKAOOL',
                'institutional_key' => '40147',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANKS OF AMERICA',
                'institutional_key' => '40106',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANOBRAS',
                'institutional_key' => '37009',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANORTE',
                'institutional_key' => '40072',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANREGIO',
                'institutional_key' => '40058',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANSEFI',
                'institutional_key' => '37166',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANSI',
                'institutional_key' => '40060',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BANXICO',
                'institutional_key' => '2001',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BARCLAYS',
                'institutional_key' => '40129',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BBASE',
                'institutional_key' => '40145',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BBVA BANCOMER',
                'institutional_key' => '40012',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'BMONEX',
                'institutional_key' => '40112',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CAJA POP MEXICA',
                'institutional_key' => '90677',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CAJA TELEFONIST',
                'institutional_key' => '90683',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CB INTERCAM',
                'institutional_key' => '90630',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CIBANCO',
                'institutional_key' => '40143',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CI BOLSA',
                'institutional_key' => '90631',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CLS',
                'institutional_key' => '90901',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CoDI VALIDA',
                'institutional_key' => '90903',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'COMPARTAMOS',
                'institutional_key' => '40130',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CONSUBANCO',
                'institutional_key' => '40140',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CREDICAPITAL',
                'institutional_key' => '90652',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CREDIT SUISSE',
                'institutional_key' => '40126',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'CRISTOBAL COLON',
                'institutional_key' => '90680',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'DEUTSCHE',
                'institutional_key' => '40124',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'DONDE',
                'institutional_key' => '40151',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'ESTRUCTURADORES',
                'institutional_key' => '90606',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'EVERCORE',
                'institutional_key' => '90648',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'FINAMEX',
                'institutional_key' => '90616',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'FINCOMUN',
                'institutional_key' => '90634',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'FOMPED',
                'institutional_key' => '90689',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'FONDO (FIRA)',
                'institutional_key' => '90685',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'GBM',
                'institutional_key' => '90601',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'HDI SEGUROS',
                'institutional_key' => '90636',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'HIPOTECARIA FED',
                'institutional_key' => '37168',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'HSBC',
                'institutional_key' => '40021',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'ICBC',
                'institutional_key' => '40155',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INBURSA',
                'institutional_key' => '40036',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INDEVAL',
                'institutional_key' => '90902',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INMOBILIARIO',
                'institutional_key' => '40150',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INTERCAM BANCO',
                'institutional_key' => '40136',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INVERCAP',
                'institutional_key' => '90686',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'INVEX',
                'institutional_key' => '40059',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'JP MORGAN',
                'institutional_key' => '40110',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'KUSPIT',
                'institutional_key' => '90653',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'LIBERTAD',
                'institutional_key' => '90670',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MASARI',
                'institutional_key' => '90602',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MIFEL',
                'institutional_key' => '40042',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MIZUHO banks',
                'institutional_key' => '40158',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MONEXCB',
                'institutional_key' => '90600',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MUFG',
                'institutional_key' => '40108',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'MULTIVA BANCO',
                'institutional_key' => '40132',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'NAFIN',
                'institutional_key' => '37135',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'OPM',
                'institutional_key' => '90684',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'PAGATODO',
                'institutional_key' => '40148',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'PROFUTURO',
                'institutional_key' => '90620',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'SABADELL',
                'institutional_key' => '40156',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'SANTANDER',
                'institutional_key' => '40014',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'SCOTIAbanks',
                'institutional_key' => '40044',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'SHINHAN',
                'institutional_key' => '40157',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'STP',
                'institutional_key' => '90646',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'UNAGRA',
                'institutional_key' => '90656',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'VALMEX',
                'institutional_key' => '90617',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'VALUE',
                'institutional_key' => '90605',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'VECTOR',
                'institutional_key' => '90608',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'VE POR MAS',
                'institutional_key' => '40113',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('banks')->insert(
            array(
                'name' => 'VOLKSWAGEN',
                'institutional_key' => '40141',
                'created_at' => date('Y-m-d H:i:s'),
            )
        );
    }
}
