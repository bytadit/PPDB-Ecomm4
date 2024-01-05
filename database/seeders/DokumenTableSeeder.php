<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DokumenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dokumen')->delete();
        
        \DB::table('dokumen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Pas Foto',
                'tipe' => 3,
                'jumlah' => 1,
                'deskripsi' => 'Pas Foto berwarna, background merah, diupload dalam file jpg',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:33:58',
                'updated_at' => '2024-01-02 23:33:58',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'KK',
                'tipe' => 1,
                'jumlah' => 1,
                'deskripsi' => 'Scan Kartu Keluarga, dalam file PDF',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:34:33',
                'updated_at' => '2024-01-02 23:34:33',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Akta Kelahiran',
                'tipe' => 1,
                'jumlah' => 1,
                'deskripsi' => 'Scan akta kelahiran, dalam bentuk PDF',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:34:59',
                'updated_at' => '2024-01-02 23:34:59',
            ),
        ));
        
        
    }
}