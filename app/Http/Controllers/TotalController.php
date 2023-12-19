<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TotalController extends Controller
{
    public function index()
    {
        $totals = Total::all();
        $user =  Auth::user();
        return view('totals.index', compact('totals', 'user'));
    }

    public function create()
    {
        return view('totals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'tahun_anggaran' => 'required|integer',
            'total_realisasi' => 'required|numeric',
            'total_anggaran' => 'required|numeric',
        ]);

        Total::create($request->all());

        return redirect()->route('totals.index')->with('success', 'Data Total berhasil ditambahkan!');
    }

    public function show($id)
    {
        $total = Total::findOrFail($id);

        return view('totals.show', compact('total'));
    }

    public function edit($id)
    {
        $total = Total::findOrFail($id);

        return view('totals.edit', compact('total'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required',
            'tahun_anggaran' => 'required|integer',
            'total_realisasi' => 'required|numeric',
            'total_anggaran' => 'required|numeric',
        ]);

        $total = Total::findOrFail($id);
        $total->update($request->all());

        return redirect()->route('totals.index')->with('success', 'Data Total berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $total = Total::findOrFail($id);
        $total->delete();

        return redirect()->route('totals.index')->with('success', 'Data Total berhasil dihapus!');
    }
}
