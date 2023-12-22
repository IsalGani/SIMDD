<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@softui.com',
            'role' => 'admin_kecamatan',
            'is_admin' =>   '1',
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Bongo',
            'email' => 'Bongo@gmail.com',
            'role' => 'admin_desa',
            'is_admin' =>   '1',
            'password' => Hash::make('Bongo@gmail.com'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Kayubulan',
            'email' => 'Kayubulan@gmail.com',
            'role' => 'admin_desa',
            'is_admin' =>   '1',
            'password' => Hash::make('Kayubulan@gmail.com'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
        

        
    }
}
