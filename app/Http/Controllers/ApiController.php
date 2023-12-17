<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Tahun;
use App\Models\Proyek;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTahun()
    {
        $tahun = Tahun::all();

        return response()->json($tahun);
    }

    public function getDesa()
    {
        $desa = Desa::all();

        return response()->json($desa);
    }

    public function getProyek()
    {
        $proyek = Proyek::with('tahun', 'desa')->get();

        return response()->json($proyek);
    }
}
