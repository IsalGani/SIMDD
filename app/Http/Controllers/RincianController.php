<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Total;
use App\Models\Rincian;
use App\Models\SubBidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RincianController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $availableYears = Total::where('nama_desa', $user->name)
            ->pluck('tahun_anggaran')
            ->unique()
            ->sortByDesc(function ($year) {
                return $year;
            });

        $tahun_anggaran = $request->input('tahun_anggaran', $availableYears->isNotEmpty() ? $availableYears->first() : date('Y'));


        // Mengambil data total berdasarkan nama desa dan tahun anggaran
        $rincians = Total::where('nama_desa', $user->name)
            ->where('tahun_anggaran', $tahun_anggaran)
            ->get();

        $bidangs = Bidang::all();

        $subBidangs = SubBidang::all();


        return view('rincians.index', compact('rincians', 'tahun_anggaran', 'user', 'availableYears', 'bidangs', 'subBidangs'));
    }

    public function create(Request $request)
    {
        $bidang = Bidang::all();
        $user = Auth::user();
        $availableYears = Total::where('nama_desa', $user->name)
            ->pluck('tahun_anggaran')
            ->unique()
            ->sortByDesc(function ($year) {
                return $year;
            });

        $tahun_anggaran = $request->input('tahun_anggaran', $availableYears->isNotEmpty() ? $availableYears->first() : date('Y'));


        // Mengambil data total berdasarkan nama desa dan tahun anggaran
        $rincians = Total::where('nama_desa', $user->name)
            ->where('tahun_anggaran', $tahun_anggaran)
            ->get();
        return view('rincians.create', compact('rincians', 'tahun_anggaran', 'bidang'));
    }

    public function store(Request $request)
    {
        
            $request->validate(
                [
                    'tahun_anggaran' => 'required|integer|unique:totals,tahun_anggaran,NULL,id,nama_desa,' . Auth::user()->name,
                    'total_realisasi' => 'required|numeric',
                    'total_anggaran' => 'required|numeric',
                ],
                [
                    'tahun_anggaran.unique' => 'Data untuk tahun tersebut sudah ada.',
                ]


            );

            $user = Auth::user();
            $request->merge(
                [
                    'nama_desa' => $user->name,
                ]
            );

            Rincian::create($request->all());

            return view('rincians.index', compact('user'));
    
    }

    public function show($id)
    {
        $rincian = Rincian::findOrFail($id);

        return view('rincians.show', compact('rincian'));
    }

    public function edit($id)
    {
        $rincian = Rincian::findOrFail($id);

        return view('rincians.edit', compact('total'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required',
            'tahun_anggaran' => 'required|integer',
            'total_realisasi' => 'required|numeric',
            'total_anggaran' => 'required|numeric',
        ]);

        $rincian = Rincian::findOrFail($id);
        $rincian->update($request->all());

        return redirect()->route('rincians.index')->with('success', 'Data Rincian berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $rincian = Rincian::findOrFail($id);
        $rincian->delete();

        return redirect()->route('rincians.index')->with('success', 'Data Rincian berhasil dihapus!');
    }
}
