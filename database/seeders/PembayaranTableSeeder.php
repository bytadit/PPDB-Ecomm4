<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PembayaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pembayaran')->delete();
        
        
        
    }
}