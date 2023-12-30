<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {

        $namaDesa = DB::table('desa')->find(1);
        $tahunAnggarans = DB::table('tahun_anggaran')
                                ->select('tahun')
                                ->where('id_desa', 3)
                                ->get();

        return view('data.index', compact('namaDesa', 'tahunAnggarans'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
