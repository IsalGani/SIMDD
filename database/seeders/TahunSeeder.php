<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/TahunSeeder.php

public function run()
{
    \App\Models\Tahun::create(['tahun' => 2022]);
    // Tambahkan data tahun lainnya jika diperlukan
}

}
