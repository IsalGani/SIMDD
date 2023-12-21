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
        <div class="card">
            <div class="card-body">
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
                                <td>Rp.{{ $rincian->total_realisasi }}</td>
                                <td>Rp.{{ $rincian->total_anggaran }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No records found</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
                <div class="d-flex justify-content-end m-2">

                    {{-- <a href="{{ route('rincians.create', $rincian->id) }}" class="btn btn-info btn-sm">Tambah Rincian</a> --}}
                    <a href="{{ route('rincians.edit', $rincian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('rincians.destroy', $rincian->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>

            </div>
        </div>


        @forelse ($bidangs as $bidangs)
            <div class="card mt-3">
                <div class="card-title ms-3 mt-3">{{ $bidangs->nama_bidang }}</div>
                <div class="card-body">
                    <table class="table mt-3 text-center">

                        <thead>
                            <tr>
                                <th>Nama Bidang</th>
                                <th>Nama Sub Bidang</th>
                                <th>Realisasi Sub Bidang</th>
                                <th>Anggaran Sub Bidang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subBidangs as $subBidangs)
                                <tr>
                                    <td>{{ $subBidangs->nama_sub_bidang }}</td>
                                    <td>Rp.{{ $subBidangs->realisasi_bidang }}</td>
                                    <td>Rp.{{ $subBidangs->anggaran_bidang }}</td>
                                </tr>
                            @empty

                            <form action="{{ route('rincians.store') }}" method="post">
                                @csrf
                                <tr>
                                    <td colspan="6" class="text-center">No records found</td>
                                </tr>
                                <tr>
                                    <div id="subBidangContainer">
                                        <div class="form-group subBidangRow">
                                            <div class="row m-0">
                                                <div class="col">
                                                    <label for="nama_bidang">Nama Bidang:</label>
                                                    <input type="text" name="nama_bidang[]" class="form-control" readonly value="{{$bidangs->nama_bidang}}">
                                                </div>
                                                <div class="col">
                                                    <label for="nama_sub_bidang">Nama Sub Bidang:</label>
                                                    <input type="text" name="nama_sub_bidang[]" class="form-control" required>
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi_bidang">Realisasi Bidang:</label>
                                                    <input type="number" name="realisasi_bidang[]" class="form-control" required>
                                                </div>
                                                <div class="col">
                                                    <label for="anggaran_bidang">Anggaran Bidang:</label>
                                                    <input type="number" name="anggaran_bidang[]" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end m-2">                                               
                                                    <button type="button" class="btn btn-success btnAddSubBidang m-1">Tambah Sub
                                                        Bidang</button>
                                                                                        
                                                    <button type="button" class="btn btn-danger btnRemoveSubBidang m-1">Remove</button>
                                                    <button type="submit" class="btn btn-primary m-1">Submit</button>
    
                                            </div>
                                        </div>
                                    </div>
                                    

                                </tr>
                            </form>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>

        @empty
            <tr>
                <td colspan="6" class="text-center">No records found</td>
            </tr>
        @endforelse



    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Tambahkan SubBidang Baru
            $(".btnAddSubBidang").click(function () {
                var newSubBidang = $(".subBidangRow:first").clone();
                newSubBidang.find("input").val("");
                $("#subBidangContainer").append(newSubBidang);
                $(".btnRemoveSubBidang").show();
            });

            // Hapus SubBidang
            $("#subBidangContainer").on("click", ".btnRemoveSubBidang", function () {
                $(this).closest(".subBidangRow").remove();
            });
        });
    </script>
@endsection
