<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BiayaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('biaya')->delete();
        
        \DB::table('biaya')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Konsumsi 2',
                'setting' => 2,
                'nominal' => 400000.0,
                'id_penerimaan' => 1,
                'created_at' => '2023-12-18 06:04:13',
                'updated_at' => '2023-12-18 06:19:11',
            ),
        ));
        
        
    }
}