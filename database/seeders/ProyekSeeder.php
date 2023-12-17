<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   // database/seeders/ProyekSeeder.php

public function run()
{
    \App\Models\Proyek::create([
        'nama_proyek' => 'Proyek 1',
        'anggaran' => 100000.00,
        'realisasi' => 80000.00,
        'tahun_id' => 1,
        'desa_id' => 1,
    ]);
    // Tambahkan data proyek lainnya jika diperlukan
}

}
