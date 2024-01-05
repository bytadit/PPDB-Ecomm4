<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RaporsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rapors')->delete();
        
        \DB::table('rapors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_semester' => '1',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:35:29',
                'updated_at' => '2024-01-02 23:35:29',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_semester' => '2',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:35:45',
                'updated_at' => '2024-01-02 23:35:45',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_semester' => '3',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:35:52',
                'updated_at' => '2024-01-02 23:35:52',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_semester' => '4',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:36:01',
                'updated_at' => '2024-01-02 23:36:01',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_semester' => '5',
                'id_penerimaan' => 1,
                'created_at' => '2024-01-02 23:36:09',
                'updated_at' => '2024-01-02 23:36:09',
            ),
        ));
        
        
    }
}