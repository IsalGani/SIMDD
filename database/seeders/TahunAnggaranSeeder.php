<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TahunAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tahun_anggaran')->insert([
            [
                'tahun' => '2017',
                'id_desa' => '2'
            ],

            [
                'tahun' => '2017',
                'id_desa' => '3'
            ],

            [
                'tahun' => '2018',
                'id_desa' => '1'
            ],

            [
                'tahun' => '2018',
                'id_desa' => '2'
            ],

            [
                'tahun' => '2018',
                'id_desa' => '3'
            ],
           
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
