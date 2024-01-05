<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NilaiPendaftarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nilai_pendaftars')->delete();
        
        
        
    }
}