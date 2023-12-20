<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => Hash::make('admin123')
        ]);
        $this->call(JalurTableSeeder::class);
        $this->call(JenisKegiatanTableSeeder::class);
        $this->call(JenjangTableSeeder::class);
        $this->call(PenerimaanTableSeeder::class);
        $this->call(KegiatanTableSeeder::class);
        $this->call(BiayaTableSeeder::class);
        $this->call(DokumenTableSeeder::class);
        $this->call(DokumenPendaftarTableSeeder::class);
        $this->call(PembayaranTableSeeder::class);
        $this->call(PendaftarTableSeeder::class);
        $this->call(PersyaratanTableSeeder::class);
        $this->call(SeleksiTableSeeder::class);
    }
}
