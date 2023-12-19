<?php

namespace App\Http\Controllers;

use App\Models\Rincian;
use Illuminate\Http\Request;

class RincianController extends Controller
{
    public function index()
    {
        $rincians = Rincian::all();

        return view('rincian.index', compact('rincians'));
    }

    public function create()
    {
        return view('rincian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'tahun_anggaran' => 'required|integer',
            'total_realisasi' => 'required|numeric',
            'total_anggaran' => 'required|numeric',
        ]);

        Rincian::create($request->all());

        return redirect()->route('rincian.index')->with('success', 'Data Rincian berhasil ditambahkan!');
    }

    public function show($id)
    {
        $rincian = Rincian::findOrFail($id);

        return view('rincian.show', compact('rincian'));
    }

    public function edit($id)
    {
        $rincian = Rincian::findOrFail($id);

        return view('rincian.edit', compact('total'));
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

        return redirect()->route('rincian.index')->with('success', 'Data Rincian berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $rincian = Rincian::findOrFail($id);
        $rincian->delete();

        return redirect()->route('rincian.index')->with('success', 'Data Rincian berhasil dihapus!');
    }
}
