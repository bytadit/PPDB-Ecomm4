<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kegiatan')->delete();
        
        \DB::table('kegiatan')->insert(array (
            0 => 
            array (
                'id' => 7,
                'tgl_awal' => '2023-12-20 00:00:00',
                'tgl_akhir' => '2024-01-05 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 2,
                'created_at' => '2023-12-16 08:40:51',
                'updated_at' => '2023-12-16 08:40:51',
            ),
        ));
        
        
    }
}