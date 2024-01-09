@extends('layouts.user_type.auth')

@section('content')
    <div class="container bg-secondary rounded-3">
        
<h2>Tambah Desa</h2>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('master.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_desa">Nama Desa:</label>
        <input type="text" name="nama_desa" class="form-control" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection
