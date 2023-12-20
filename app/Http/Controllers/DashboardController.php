<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tahunAnggaranSaatIni = date('Y');

        $totalsDesa = Total::where('nama_desa', $user->name)
            ->orderBy('tahun_anggaran')
            ->get();


        $totals = Total::orderBy('tahun_anggaran')->get();

        $seluruhDesa = Total::where('tahun_anggaran', $tahunAnggaranSaatIni)
        ->orderBy('tahun_anggaran')
        ->get();
        
        return view('dashboard', compact('totals', 'totalsDesa', 'seluruhDesa'));
    }
}
