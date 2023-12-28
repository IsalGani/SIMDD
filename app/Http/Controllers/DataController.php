<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Bidang;
use App\Models\Rincian;
use App\Models\SubBidang;
use Illuminate\Http\Request;
use App\Models\TahunAnggaran;

class DataController extends Controller
{
    public function index()
    {
        // Tampilkan data untuk semua entitas
        $desas = Desa::all();
        $tahunAnggarans = TahunAnggaran::all();
        $bidangs = Bidang::all();
        $subBidangs = SubBidang::all();
        $rincians = Rincian::all();

        return view('data.index', compact('desas', 'tahunAnggarans', 'bidangs', 'subBidangs', 'rincians'));
    }

    // Fungsi-fungsi CRUD lainnya sesuai kebutuhan
    // ...

    // Contoh fungsi untuk menampilkan data sebuah desa
    public function showDesa($id)
    {
        $desa = Desa::findOrFail($id);
        return view('data.show_desa', compact('desa'));
    }

    // Contoh fungsi untuk menampilkan data sebuah tahun anggaran
    public function showTahunAnggaran($id)
    {
        $tahunAnggaran = TahunAnggaran::findOrFail($id);
        return view('data.show_tahun_anggaran', compact('tahunAnggaran'));
    }

    // dan seterusnya...
}
