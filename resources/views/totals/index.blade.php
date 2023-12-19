@extends('layouts.user_type.auth')


@section('content')
<div class="container">
<h2>Dana Desa</h2>
<p>Selamat Datang {{   $user->name}}!</p>
    <a href="{{ route('totals.create') }}" class="btn btn-success">Tambah Data</a>
    
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
            @foreach($totals as $total)
                <tr>  
                    <td>{{ $total->nama_desa }}</td>
                    <td>{{ $total->tahun_anggaran }}</td>
                    <td>Rp.{{ $total->total_realisasi }}</td>
                    <td>Rp.{{ $total->total_anggaran }}</td>
                    <td>
                        <a href="{{ route('totals.show', $total->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('totals.edit', $total->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('totals.destroy', $total->id) }}" method="post" style="display:inline">
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