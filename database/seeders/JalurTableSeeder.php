<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JalurTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jalur')->delete();
        
        \DB::table('jalur')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Reguler',
                'created_at' => '2023-12-16 06:09:59',
                'updated_at' => '2023-12-16 06:09:59',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Afirmasi',
                'created_at' => '2023-12-16 06:10:05',
                'updated_at' => '2023-12-16 06:10:05',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Prestasi',
                'created_at' => '2023-12-21 00:07:16',
                'updated_at' => '2023-12-21 00:07:16',
            ),
        ));
        
        
    }
}