<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class TotalController extends Controller
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
        $totals = Total::where('nama_desa', $user->name)
            ->where('tahun_anggaran', $tahun_anggaran)
            ->get();

        return view('totals.index', compact('totals', 'tahun_anggaran', 'user', 'availableYears'));
    }

    public function create()
    {
        return view('totals.create');
    }

    public function store(Request $request)
    {
        try {
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

            Total::create($request->all());

            return redirect()->route('totals.index')->with('success', 'Data berhasil ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('totals.create')->withErrors($e->errors())->withInput();
        }
    }

    public function show($id)
    {
        $total = Total::findOrFail($id);

        return view('totals.show', compact('total'));
    }

    public function edit($id)
    {
        $total = Total::findOrFail($id);

        // Kembalikan view untuk form edit dengan data total yang akan diedit
        return view('totals.edit', compact('total'));
    }


    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form edit
        $request->validate([
            'tahun_anggaran' => 'required|integer',
            'total_realisasi' => 'required|numeric',
            'total_anggaran' => 'required|numeric',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Temukan data total berdasarkan ID
        $total = Total::findOrFail($id);

        // Perbarui data total dengan data yang diterima dari form edit
        $total->update([
            'tahun_anggaran' => $request->input('tahun_anggaran'),
            'total_realisasi' => $request->input('total_realisasi'),
            'total_anggaran' => $request->input('total_anggaran'),
            // Perbarui dengan aturan validasi lainnya
        ]);

        // Kembalikan ke halaman yang sesuai atau berikan pesan sukses
        return redirect()->route('totals.index')->with('success', 'Data Total berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $total = Total::findOrFail($id);
        $total->delete();

        return redirect()->route('totals.index')->with('success', 'Data Total berhasil dihapus!');
    }
}
