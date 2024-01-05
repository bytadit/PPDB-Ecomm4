<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersyaratanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('persyaratan')->delete();
        
        \DB::table('persyaratan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_penerimaan' => 1,
                'nama' => 'Usia',
                'setting' => 1,
                'jenis_persyaratan' => 2,
                'is_mandatory' => 1,
                'value' => 6,
                'deskripsi' => 'Usia kurang dari 6 tahun',
                'created_at' => '2024-01-02 22:56:04',
                'updated_at' => '2024-01-02 23:30:26',
            ),
            1 => 
            array (
                'id' => 2,
                'id_penerimaan' => 1,
                'nama' => 'Sehat',
                'setting' => NULL,
                'jenis_persyaratan' => 1,
                'is_mandatory' => 0,
                'value' => NULL,
                'deskripsi' => 'Harus Sehat Jasmani & Rohani',
                'created_at' => '2024-01-02 23:31:06',
                'updated_at' => '2024-01-02 23:31:06',
            ),
            2 => 
            array (
                'id' => 3,
                'id_penerimaan' => 1,
                'nama' => 'Domisili',
                'setting' => NULL,
                'jenis_persyaratan' => 1,
                'is_mandatory' => 0,
                'value' => NULL,
                'deskripsi' => 'Harus berdomisili maksimal 3 km dari sekolah',
                'created_at' => '2024-01-02 23:31:41',
                'updated_at' => '2024-01-02 23:31:41',
            ),
            3 => 
            array (
                'id' => 4,
                'id_penerimaan' => 1,
                'nama' => 'Menikah',
                'setting' => NULL,
                'jenis_persyaratan' => 1,
                'is_mandatory' => 0,
                'value' => NULL,
                'deskripsi' => 'Belum pernah menikah',
                'created_at' => '2024-01-02 23:32:02',
                'updated_at' => '2024-01-02 23:32:02',
            ),
            4 => 
            array (
                'id' => 5,
                'id_penerimaan' => 1,
                'nama' => 'Prestasi',
                'setting' => 2,
                'jenis_persyaratan' => 2,
                'is_mandatory' => 0,
                'value' => 2,
                'deskripsi' => 'Memiliki minimal 2 Prestasi, dibuktikan dengan piagam atau sertifikat',
                'created_at' => '2024-01-02 23:32:53',
                'updated_at' => '2024-01-02 23:32:53',
            ),
        ));
        
        
    }
}