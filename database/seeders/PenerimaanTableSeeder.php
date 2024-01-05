<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenerimaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penerimaan')->delete();
        
        \DB::table('penerimaan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_jenjang' => 1,
                'id_jalur' => 1,
                'periode' => '2024',
                'biaya_pendaftaran' => 500000,
                'is_open' => 1,
                'created_at' => '2024-01-02 22:56:04',
                'updated_at' => '2024-01-02 23:28:42',
            ),
        ));
        
        
    }
}