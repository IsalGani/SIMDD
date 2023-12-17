<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/DesaSeeder.php

public function run()
{
    \App\Models\Desa::create(['nama_desa' => 'Bongo']);
    \App\Models\Desa::create(['nama_desa' => 'Buhudaa']);
    \App\Models\Desa::create(['nama_desa' => 'Lopo']);
    \App\Models\Desa::create(['nama_desa' => 'Kayubulan']);
    \App\Models\Desa::create(['nama_desa' => 'Biluhu Timur']);
    \App\Models\Desa::create(['nama_desa' => 'Tontayuo']);
    \App\Models\Desa::create(['nama_desa' => 'Langgula']);
    \App\Models\Desa::create(['nama_desa' => 'Lamu']);
    \App\Models\Desa::create(['nama_desa' => 'Limooo']);
    // Tambahkan data desa lainnya jika diperlukan
}

}
