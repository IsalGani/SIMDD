@extends('layouts.user_type.auth')


@section('content')
<div class="container">
<h2>Rincian Anggaran</h2>
    <a href="{{ route('rincian.create') }}" class="btn btn-success">Tambah Rincian</a>
    <a href="{{ route('rincian.index') }}" class="btn btn-success">Rincian Anggaran</a>
    
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3 ">
        <thead>
            <tr>
                <th>Nama Desa</th>
                <th>Tahun Anggaran</th>
                <th>Total Realisasi</th>
                <th>Total Anggaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rincians as $rincian)
                <tr>  
                    <td>{{ $rincian->nama_desa }}</td>
                    <td>{{ $rincian->tahun_anggaran }}</td>
                    <td>Rp.{{ $rincian->total_realisasi }}</td>
                    <td>Rp.{{ $rincian->total_anggaran }}</td>
                    <td>
                        <a href="{{ route('rincian.show', $rincian->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('rincian.edit', $rincian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('rincian.destroy', $rincian->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection