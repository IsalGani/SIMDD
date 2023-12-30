@section('content')
    <div class="container">
        <h2>Tambah Data</h2>


        <!-- Form untuk menambahkan Tahun Anggaran -->
        <form method="POST" action="{{ route('data.storeTahunAnggaran') }}">
            @csrf

            <div class="form-group">
                <label for="tahun">Tahun Anggaran:</label>
                <input type="text" name="tahun" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_desa">Desa:</label>
                <select name="id_desa" class="form-control" required>
                    @foreach($desa as $desa)
                        <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Tahun Anggaran</button>
        </form>

        <!-- Form untuk menambahkan Sub Bidang -->
        <form method="POST" action="{{ route('data.storeSubBidang') }}">
            @csrf

            <div class="form-group">
                <label for="nama_sub_bidang">Nama Sub Bidang:</label>
                <input type="text" name="nama_sub_bidang" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_bidang">Bidang:</label>
                <select name="id_bidang" class="form-control" required>
                    @foreach($bidangs as $bidang)
                        <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Sub Bidang</button>
        </form>

        <!-- Form untuk menambahkan Rincian -->
        <form method="POST" action="{{ route('data.storeRincian') }}">
            @csrf

            <div class="form-group">
                <label for="jumlah_anggaran">Jumlah Anggaran:</label>
                <input type="text" name="jumlah_anggaran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jumlah_realisasi">Jumlah Realisasi:</label>
                <input type="text" name="jumlah_realisasi" class="form-control">
            </div>

            <div class="form-group">
                <label for="id_sub_bidang">Sub Bidang:</label>
                <select name="id_sub_bidang" class="form-control" required>
                    @foreach($subBidangs as $subBidang)
                        <option value="{{ $subBidang->id }}">{{ $subBidang->nama_sub_bidang }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Rincian</button>
        </form>
    </div>
@endsection