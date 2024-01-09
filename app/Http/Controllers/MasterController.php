<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class MasterController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $namaDesa = Total::select('nama_desa')
            ->distinct()
            ->get();


        return view('master.index', compact('user', 'namaDesa'));
    }

    public function create()
    {


        return view('master.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    'nama_desa' => 'required|string|unique:nama_desa,' . Auth::user()->name,
                ],
                [
                    'nama_desa.unique' => 'Data untuk tahun tersebut sudah ada.',
                ]


            );

            Total::create($request->all());

            return redirect()->route('master.index')->with('success', 'Data berhasil ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('master.create')->withErrors($e->errors())->withInput();
        }
    }

    public function show()
    {
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
            'nama_desa' => 'required|string',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Temukan data total berdasarkan ID
        $total = Total::findOrFail($id);

        // Perbarui data total dengan data yang diterima dari form edit
        $total->update([
            'nama_desa' => $request->input('nama_desa'),
           
            // Perbarui dengan aturan validasi lainnya
        ]);

        // Kembalikan ke halaman yang sesuai atau berikan pesan sukses
        return redirect()->route('master.index')->with('success', 'Data Total berhasil diperbarui!');
    
    }

    public function destroy()
    {
    }
}
