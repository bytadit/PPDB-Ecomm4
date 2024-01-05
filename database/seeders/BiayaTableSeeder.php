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
                'id' => 1,
                'nama' => 'Uang Gedung',
                'setting' => 2,
                'nominal' => 1000000,
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:29:10',
                'updated_at' => '2024-01-02 23:29:10',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'SPP',
                'setting' => 3,
                'nominal' => 300000,
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:29:29',
                'updated_at' => '2024-01-02 23:29:29',
            ),
        ));
        
        
    }
}