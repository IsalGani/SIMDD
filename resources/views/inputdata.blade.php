@extends('layouts.user_type.auth')


@section('content')
<div class="container">
    {{-- <form action="{{ route('budgets.store') }}" method="POST"> --}}
        @csrf
        <div class="form-group">
            <label for="tahun_anggaran">Tahun Anggaran:</label>
            <input type="text" name="tahun_anggaran" id="tahun_anggaran" class="form-control">
        </div>

        <div id="subBidangFields" class="row">
            <!-- Dynamic sub-bidang fields will be added here -->
        </div>

        <button type="button" id="addSubBidang" class="btn btn-success">Tambah Sub Bidang</button>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        let subBidangCounter = 1;

        $('#addSubBidang').click(function () {
            const subBidangFields = $('#subBidangFields');
            const newSubBidangField = `
                <div id="subBidang${subBidangCounter}" class="col-md-2">
                    <div class="form-group">
                        <label for="nama_sub_bidang_${subBidangCounter}">Nama Sub Bidang:</label>
                        <input type="text" name="nama_sub_bidang_${subBidangCounter}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="anggaran_${subBidangCounter}">Anggaran:</label>
                        <input type="text" name="anggaran_${subBidangCounter}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="realisasi_${subBidangCounter}">Realisasi:</label>
                        <input type="text" name="realisasi_${subBidangCounter}" class="form-control">
                    </div>
                    <button type="button" class="btn btn-danger" onclick="removeSubBidang(${subBidangCounter})">Hapus</button>
                </div>
            `;

            subBidangFields.append(newSubBidangField);
            subBidangCounter++;
        });

        // Function to remove a sub-bidang field
        window.removeSubBidang = function (counter) {
            $(`#subBidang${counter}`).remove();
        };
    });
</script>
@endsection
