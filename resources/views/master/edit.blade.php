@extends('layouts.user_type.auth')


@section('content')
    <div class="container">

        <h2>Edit Desa</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('master.update', $total->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_desa">Nama Desa:</label>
                <input type="text" name="nama_desa" class="form-control" value="{{ $total->nama_desa }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
