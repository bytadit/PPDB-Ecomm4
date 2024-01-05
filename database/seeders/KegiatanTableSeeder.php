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
                'id' => 1,
                'tgl_awal' => '2024-01-04 00:00:00',
                'tgl_akhir' => '2024-01-06 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 1,
                'created_at' => '2024-01-02 22:56:43',
                'updated_at' => '2024-01-02 22:56:43',
            ),
            1 => 
            array (
                'id' => 2,
                'tgl_awal' => '2024-01-05 00:00:00',
                'tgl_akhir' => '2024-01-11 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 2,
                'created_at' => '2024-01-02 22:57:02',
                'updated_at' => '2024-01-02 22:57:02',
            ),
            2 => 
            array (
                'id' => 3,
                'tgl_awal' => '2024-01-12 00:00:00',
                'tgl_akhir' => '2024-01-15 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 4,
                'created_at' => '2024-01-02 22:57:23',
                'updated_at' => '2024-01-02 22:57:23',
            ),
            3 => 
            array (
                'id' => 4,
                'tgl_awal' => '2024-01-20 00:00:00',
                'tgl_akhir' => '2024-01-23 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 3,
                'created_at' => '2024-01-02 22:57:42',
                'updated_at' => '2024-01-02 22:57:42',
            ),
            4 => 
            array (
                'id' => 6,
                'tgl_awal' => '2024-01-25 00:00:00',
                'tgl_akhir' => '2024-01-27 00:00:00',
                'id_penerimaan' => 1,
                'id_jenis_kegiatan' => 5,
                'created_at' => '2024-01-02 23:28:30',
                'updated_at' => '2024-01-02 23:28:30',
            ),
        ));
        
        
    }
}