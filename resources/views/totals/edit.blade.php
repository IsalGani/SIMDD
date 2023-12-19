<h2>Edit Total</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('totals.update', $total->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_desa">Nama Desa:</label>
        <input type="text" name="nama_desa" class="form-control" value="{{ $total->nama_desa }}" required>
    </div>
    <div class="form-group">
        <label for="tahun_anggaran">Tahun Anggaran:</label>
        <input type="number" name="tahun_anggaran" class="form-control" value="{{ $total->tahun_anggaran }}" required>
    </div>
    <div class="form-group">
        <label for="total_realisasi">Total Realisasi:</label>
        <input type="number" name="total_realisasi" class="form-control" value="{{ $total->total_realisasi }}" required>
    </div>
    <div class="form-group">
        <label for="total_anggaran">Total Anggaran:</label>
        <input type="number" name="total_anggaran" class="form-control" value="{{ $total->total_anggaran }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Total</button>
</form>