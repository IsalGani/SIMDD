<?php

namespace App\Http\Controllers;

use App\Models\SubBidang;
use Illuminate\Http\Request;

class SubBidangController extends Controller
{
    public function index()
    {
        $subBidangs = SubBidang::with('bidang')->get();
        return view('sub_bidang.index', compact('subBidangs'));
    }
}
