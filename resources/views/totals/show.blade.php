<h2>Total Details</h2>

    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <td>{{ $total->id }}</td>
        </tr>
        <tr>
            <th>Nama Desa</th>
            <td>{{ $total->nama_desa }}</td>
        </tr>
        <tr>
            <th>Tahun Anggaran</th>
            <td>{{ $total->tahun_anggaran }}</td>
        </tr>
        <tr>
            <th>Total Realisasi</th>
            <td>{{ $total->total_realisasi }}</td>
        </tr>
        <tr>
            <th>Total Anggaran</th>
            <td>{{ $total->total_anggaran }}</td>
        </tr>
    </table>

    <a href="{{ route('totals.index') }}" class="btn btn-primary">Back to List</a>
