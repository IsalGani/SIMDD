@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        
<h2>Tambah Data Rincian</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('rincian.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_desa">Nama Desa:</label>
        <input type="text" name="nama_desa" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tahun_anggaran">Tahun Anggaran:</label>
        <input type="number" name="tahun_anggaran" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="total_realisasi">Total Realisasi:</label>
        <input type="number" name="total_realisasi" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="total_anggaran">Total Anggaran:</label>
        <input type="number" name="total_anggaran" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection
