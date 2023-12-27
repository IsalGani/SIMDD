<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
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



        // Untuk chart Desa Pertahun
        #ambil nama desa dari Total
        $availableDesa_pertahun = Total::get('nama_desa')
        ->pluck('nama_desa')
        ->unique()
        ->sortByDesc(function ($desa_pertahun) {
            return $desa_pertahun;
        });
        #ambil input dari halaman index
        $nama_desa_pertahun = $request->input('nama_desa', $availableDesa_pertahun->isNotEmpty() ? $availableDesa_pertahun->first() : date('Y'));
        #tampilkan nama desa berdasarkan input dari $nama_desa
        $totalsSeluruhDesa_pertahun = Total::where('nama_desa', $nama_desa_pertahun)
        ->get();
        
        return view('dashboard', compact('totals', 'availableDesa_pertahun', 'nama_desa_pertahun', 'totalsSeluruhDesa_pertahun', 'totalsDesa', 'seluruhDesa'));
    }
}
