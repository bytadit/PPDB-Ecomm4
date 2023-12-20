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
                'periode' => '2023',
                'is_open' => 1,
                'created_at' => '2023-12-16 06:10:22',
                'updated_at' => '2023-12-16 06:10:27',
            ),
            1 => 
            array (
                'id' => 2,
                'id_jenjang' => 1,
                'id_jalur' => 2,
                'periode' => '2025',
                'is_open' => 0,
                'created_at' => '2023-12-16 08:46:30',
                'updated_at' => '2023-12-16 08:46:30',
            ),
        ));
        
        
    }
}