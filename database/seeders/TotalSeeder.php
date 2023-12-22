<?php

namespace Database\Seeders;

use App\Models\Total;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2017',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2018',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2019',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2020',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2021',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2022',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2023',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Bongo',
            'tahun_anggaran' => '2023',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Kayubulan',
            'tahun_anggaran' => '2023',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);
        Total::create([
            'nama_desa' => 'Kayubulan',
            'tahun_anggaran' => '2024',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);
        Total::create([
            'nama_desa' => 'Kayubulan',
            'tahun_anggaran' => '2022',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);


        Total::create([
            'nama_desa' => 'Buhudaa',
            'tahun_anggaran' => '2024',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Buhudaa',
            'tahun_anggaran' => '2023',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

        Total::create([
            'nama_desa' => 'Buhudaa',
            'tahun_anggaran' => '2022',
            'total_realisasi' =>   '1000000000',
            'total_anggaran' => '1000000000',
        ]);

    }
}
