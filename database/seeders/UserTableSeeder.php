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
            'email' => 'superadmin@gmail.com',
            'name' => 'Super Admin',
            'is_admin' => 1,
            'password' => Hash::make('superadmin123')
        ]);
        DB::table('users')->insert([
            'email' => 'adminsd@gmail.com',
            'name' => 'Admin SD',
            'is_admin' => 1,
            'password' => Hash::make('adminsd123')
        ]);
        DB::table('users')->insert([
            'email' => 'adminsmp@gmail.com',
            'name' => 'Admin SMP',
            'is_admin' => 1,
            'password' => Hash::make('adminsmp123')
        ]);
        DB::table('users')->insert([
            'email' => 'adminsma@gmail.com',
            'name' => 'Admin SMA',
            'is_admin' => 1,
            'password' => Hash::make('adminsma123')
        ]);
        // roles
        DB::table('roles')->insert([
            'name' => 'superadmin',
            'display_name' => 'Administrator',
            'description' => 'Administrator'
        ]);
        DB::table('roles')->insert([
            'name' => 'adminjenjang',
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
            'role_id' => 2,
            'user_id' => 2,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 3,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 4,
            'user_type' => 'App\Models\User'
        ]);
        DB::table('admin_jenjang')->insert([
            'user_id' => 2,
            'jenjang_id' => 1,
        ]);
        DB::table('admin_jenjang')->insert([
            'user_id' => 3,
            'jenjang_id' => 2,
        ]);
        DB::table('admin_jenjang')->insert([
            'user_id' => 4,
            'jenjang_id' => 3,
        ]);
         // permission user
        //  DB::table('permission_user')->insert([
        //     'permission_id' => 1,
        //     'user_id' => 1,
        //     'user_type' => 'App\Models\User'
        // ]);
        // DB::table('permission_user')->insert([
        //     'permission_id' => 2,
        //     'user_id' => 2,
        //     'user_type' => 'App\Models\User'
        // ]);

    }
}
