@extends('layouts.user_type.auth')


@section('content')
    <div class="container">
         <h2>Dana Desa</h2>
        <p>Selamat Datang 
            @if(auth()->user()->role === 'admin_desa')
            Admin {{ $user->name }}!</p>
            @endif
            {{ $user->name }}!</p>

        @if(auth()->user()->role === 'admin_kecamatan')
        <a href="{{ route('master.create') }}" class="btn btn-success">Tambah Desa</a>
        @endif
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <table class="table mt-3 text-center">
            <thead>
                <tr>

                    <th>Nama Desa</th>
                </tr>
            </thead>
            <tbody>
                {{-- tampil data untuk admin kecamatan --}}
                @if(auth()->user()->role === 'admin_kecamatan')
                @forelse($namaDesa as $total)
                    <tr>
                        <td>{{ $total->nama_desa }}</td>
                       
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No records found</td>
                    </tr>
                @endforelse
                @endif
            </tbody>
        </table>
    </div>
@endsection
