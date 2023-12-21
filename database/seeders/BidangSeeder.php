<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bidang::create(['nama_bidang' => 'Bidang Penyenlenggaraan  Pemerintahan Desa']);
        Bidang::create(['nama_bidang' => 'Bidang Pelaksanaan Pembangunan Desa']);
        Bidang::create(['nama_bidang' => 'Bidang Pembinaan Kemasyarakataan']);
        Bidang::create(['nama_bidang' => 'Bidang Pemberdayaan Masyarakat']);
        Bidang::create(['nama_bidang' => 'Bidang Penanggulangan Bencana Darurat dan Mendesak']);
    }
}
