<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JenisKegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jenis_kegiatan')->delete();
        
        \DB::table('jenis_kegiatan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Sosialisasi',
                'created_at' => '2023-12-16 06:09:25',
                'updated_at' => '2023-12-16 06:09:25',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Pendaftaran',
                'created_at' => '2023-12-16 06:09:35',
                'updated_at' => '2023-12-16 06:09:35',
            ),
        ));
        
        
    }
}