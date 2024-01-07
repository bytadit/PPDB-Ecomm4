<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // user
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'is_admin' => 1,
            'password' => Hash::make('admin123')
        ]);
        DB::table('users')->insert([
            'email' => 'bendahara@gmail.com',
            'name' => 'Bendahara',
            'is_admin' => 1,
            'password' => Hash::make('bendahara123')
        ]);
        DB::table('users')->insert([
            'email' => 'calon@gmail.com',
            'name' => 'Calon',
            'is_admin' => 0,
            'password' => Hash::make('calon123')
        ]);
        // roles
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Administrator'
        ]);
        DB::table('roles')->insert([
            'name' => 'pendaftar',
            'display_name' => 'Pendaftar',
            'description' => 'Pendaftar'
        ]);
        // permissions
        DB::table('permissions')->insert([
            'name' => 'manage-data',
            'display_name' => 'Manage Data',
            'description' => 'Manage Data'
        ]);
        DB::table('permissions')->insert([
            'name' => 'manage-duit',
            'display_name' => 'Manage Duit',
            'description' => 'Manage Duit'
        ]);
        // role user
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 3,
            'user_type' => 'App\Models\User'
        ]);
         // permission user
         DB::table('permission_user')->insert([
            'permission_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('permission_user')->insert([
            'permission_id' => 2,
            'user_id' => 2,
            'user_type' => 'App\Models\User'
        ]);

    }
}
