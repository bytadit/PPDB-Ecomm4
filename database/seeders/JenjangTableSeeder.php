<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JenjangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jenjang')->delete();
        
        \DB::table('jenjang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'SD',
                'created_at' => '2023-12-16 06:09:42',
                'updated_at' => '2023-12-16 06:09:42',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'SMP',
                'created_at' => '2023-12-16 06:09:49',
                'updated_at' => '2023-12-16 06:09:49',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'SMA',
                'created_at' => '2023-12-21 00:07:29',
                'updated_at' => '2023-12-21 00:07:29',
            ),
        ));
        
        
    }
}