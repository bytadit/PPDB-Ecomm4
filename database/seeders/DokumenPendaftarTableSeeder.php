<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DokumenPendaftarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dokumen_pendaftar')->delete();
        
        
        
    }
}