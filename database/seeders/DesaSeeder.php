<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    

        // Insert data manual
        DB::table('desa')->insert([
            [
                'nama_desa' => 'Bongo',
            ],
            [
                'nama_desa' => 'Buhudaa',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
