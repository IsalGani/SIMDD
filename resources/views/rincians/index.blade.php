@extends('layouts.user_type.auth')


@section('content')
    <div class="container">
        <h2>Rincian Dana Desa</h2>

        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        
        <form action="{{ route('rincians.index') }}" method="GET">
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
                @forelse($rincians as $rincian)
                    <tr>

                        <td>{{ $rincian->nama_desa }}</td>
                        <td>{{ $rincian->tahun_anggaran }}</td>
                        <td>{{ $rincian->total_realisasi }}</td>
                        <td>{{ $rincian->total_anggaran }}</td>
                        <td>
                            <a href="{{ route('rincians.create', $rincian->id) }}" class="btn btn-info btn-sm">Tambah Rincian</a>
                            <a href="{{ route('rincians.edit', $rincian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('rincians.destroy', $rincian->id) }}" method="post" style="display:inline">
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
            </tbody>
        </table>
    </div>
@endsection
