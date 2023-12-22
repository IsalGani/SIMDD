@extends('layouts.user_type.auth')


@section('content')
    <div class="container">
         <h2>Dana Desa</h2>
        <p>Selamat Datang 
            @if(auth()->user()->role === 'admin_desa')
            Admin {{ $user->name }}!</p>
            @endif
            {{ $user->name }}!</p>

        @if(auth()->user()->role === 'admin_desa')
        <a href="{{ route('totals.create') }}" class="btn btn-success">Tambah Data</a>
        @endif
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        {{-- pilih tahun untuk admin desa --}}
        @if(auth()->user()->role === 'admin_desa')
        <form action="{{ route('totals.index') }}" method="GET">
            <div class="form-group">
                <label for="tahun_anggaran">Pilih Tahun:</label>
                <select name="tahun_anggaran" class="form-control" onchange="this.form.submit()">
                    @foreach ($availableYears as $year)
                        <option value="{{ $year }}" {{ $tahun_anggaran == $year ? 'selected' : '' }}>
                            {{ $year }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        @endif

        {{-- pilih nama desa untuk admin kecamatan --}}
        @if(auth()->user()->role === 'admin_kecamatan')
        <form action="{{ route('totals.index') }}" method="GET">
            <div class="form-group">
                <label for="nama_desa">Pilih Desa:</label>
                <select name="nama_desa" class="form-control" onchange="this.form.submit()">
                    @foreach ($availableDesa as $desa)
                        <option value="{{ $desa }}" {{ $nama_desa == $desa ? 'selected' : '' }}>
                            {{ $desa }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        @endif

        <table class="table mt-3 text-center">
            <thead>
                <tr>

                    <th>Nama Desa</th>
                    <th>Tahun Anggaran</th>
                    <th>Total Realisasi</th>
                    <th>Total Anggaran</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {{-- tampil data untuk admin_desa --}}
                @if(auth()->user()->role === 'admin_desa')
                @forelse($totals as $total)
                    <tr>
                        <td>{{ $total->nama_desa }}</td>
                        <td>{{ $total->tahun_anggaran }}</td>
                        <td>Rp.{{ $total->total_realisasi }}</td>
                        <td>Rp.{{ $total->total_anggaran }}</td>
                        <td>
                            <a href="{{ route('rincians.index', $total->id) }}" class="btn btn-info btn-sm">Rincian</a>
                            <a href="{{ route('totals.edit', $total->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('totals.destroy', $total->id) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No records found</td>
                    </tr>
                @endforelse
                @endif


                {{-- tampil data untuk admin kecamatan --}}
                @if(auth()->user()->role === 'admin_kecamatan')
                @forelse($totalsSeluruhDesa as $total)
                    <tr>
                        <td>{{ $total->nama_desa }}</td>
                        <td>{{ $total->tahun_anggaran }}</td>
                        <td>Rp.{{ $total->total_realisasi }}</td>
                        <td>Rp.{{ $total->total_anggaran }}</td>
                        <td>
                            <a href="{{ route('rincians.index', $total->id) }}" class="btn btn-info btn-sm">Rincian</a>
                        </td>
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
