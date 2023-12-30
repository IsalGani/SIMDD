@extends('layouts.user_type.auth')


@section('content')
    <div class="container">
        <h2>Desa {{ Auth::user()->name }}</h2>
        <a href="{{ route('data.create') }}" class="btn btn-success">Tambah Data</a>
        <div class="card mx-auto shadow-lg">
            <div class="card-header mx-auto">
                Tahun Anggaran
            </div>
            <div class="card-body mx-auto">
                <ul>
                    <select name="tahunAnggaran" id="tahunAnggaran" class="p-2 bg-slate-400 text-slate-100 rounded-lg h-12">
                        @foreach($tahunAnggarans as $tahunAnggaran)
                        <option value="{{ $tahunAnggaran->tahun }}">{{ $tahunAnggaran->tahun }}</option>
                        @endforeach
                    </select>
                   
                </ul>
          
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Bidang
            </div>
            <div class="card-body">
                <ul>
                    {{-- @foreach($bidangs as $bidang)
                        <li>{{ $bidang->nama_bidang }}</li>
                    @endforeach --}}
                </ul>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Sub Bidang
            </div>
            {{-- <div class="card-body">
                <ul>
                    @foreach($subBidangs as $subBidang)
                        <li>{{ $subBidang->nama_sub_bidang }}</li>
                    @endforeach
                </ul>
            </div> --}}
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Rincian
            </div>
            {{-- <div class="card-body">
                <ul>
                    @foreach($rincians as $rincian)
                        <li>{{ $rincian->jumlah_anggaran }} - {{ $rincian->jumlah_realisasi }}</li>
                    @endforeach
                </ul>
            </div> --}}
        </div>
    </div>
@endsection
