@extends('layouts.user_type.auth')


@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                
                <div class="col-lg-4 col-md-6">
                    <h6 class="mb-0">Nama Desa</h6>
                    <select class="form-select form-select-lg mb-3" aria-label="namaDesa">
                        <option value="1">Bongo</option>
                        <option value="2">Buhudaa</option>
                        <option value="3">Lopo</option>
                        <option value="1">Kayubulan</option>
                        <option value="2">Biluhu Timur</option>
                        <option value="3">Tontayuo</option>
                        <option value="1">Langgula</option>
                        <option value="2">Lamu</option>
                        <option value="3">Limoo'o</option>
                    </select>
                </div>


                <div class="col-lg-4 col-md-6">
                    <h6 class="mb-0">Tahun Anggaran</h6>
                    <form action="/inputdata" method="POST" role="form text-left">          
                           
                        <input type="text" name="tahunAnggaran" id="tahunAnggaran" class="form-control form-control-lg mb-3"  aria-label="tahunAnggaran">

                    </form>
                </div>
                      
              

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card ">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Rincian Dana Desa') }}</h6>
            </div>
            <div class="card-body pt-4 p-3 ">
                <form action="/inputdata" method="POST" role="form text-left">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="anggaran01">Pendapatan</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <input type="text" name="anggaran01" id="anggaran01" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="belanja">Belanja</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <input type="text" name="belanja" id="belanja" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pembiayaan">Pembiayaan</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <input type="text" name="pembiayaan" id="pembiayaan" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="container-fluid py-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">{{ __('Belanja') }}</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Penyelanggaraan PAUD/TK/TPA/TKA/TPQ/Madrasah NonFormal Milik Desa (Honor, Pakaian dll)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran01">Anggaran</label>
                                                    <input type="text" name="anggaran01" id="anggaran01" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi01">Realisasi</label>
                                                    <input type="text" name="realisasi01" id="realisasi01" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    
                                    <div class="form-group">
                                        
                                        <h6 class="mb-0">Penyelanggaraan POS Kesehatan Desa/Polindes Milik Desa(Obat, Intensif, KB dll)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran02">Anggaran</label>
                                                    <input type="text" name="anggaran02" id="anggaran02" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi02">Realisasi</label>
                                                    <input type="text" name="realisasi02" id="realisasi02" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Penyelanggaraan Posyandu(Mkn Tambahan, Kls Bumil, Lamsia, Intensif)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran03">Anggaran</label>
                                                    <input type="text" name="anggaran03" id="anggaran03" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi03">Realisasi</label>
                                                    <input type="text" name="realisasi03" id="realisasi03" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Penyelanggaraan Desa Siaga Kesehatan</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran04">Anggaran</label>
                                                    <input type="text" name="anggaran04" id="anggaran04" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi04">Realisasi</label>
                                                    <input type="text" name="realisasi04" id="realisasi04" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Layanan Pos Pembinaan Terpadu(POSBINDU)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran05">Anggaran</label>
                                                    <input type="text" name="anggaran05" id="anggaran05" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi05">Realisasi</label>
                                                    <input type="text" name="realisasi05" id="realisasi05" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Pembangunan/Rehabilitasi/Peningkatan Prasanana Jalan Desa(Gorong, Selokan dll)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran06">Anggaran</label>
                                                    <input type="text" name="anggaran06" id="anggaran06" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi06">Realisasi</label>
                                                    <input type="text" name="realisasi06" id="realisasi06" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Pembangunan/Rehabilitasi/Peningkatan Embung Desa(Dipilih)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran07">Anggaran</label>
                                                    <input type="text" name="anggaran07" id="anggaran07" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi08">Realisasi</label>
                                                    <input type="text" name="realisasi08" id="realisasi08" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Penyelanggaraan Informasi Publik Desa(Poster, Baliho, dll)</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran08">Anggaran</label>
                                                    <input type="text" name="anggaran08" id="anggaran08" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi08">Realisasi</label>
                                                    <input type="text" name="realisasi08" id="realisasi08" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Pembinaan Group Kesehatan dan Kebudayaan Tingkat Desa</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran09">Anggaran</label>
                                                    <input type="text" name="anggaran09" id="anggaran09" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi09">Realisasi</label>
                                                    <input type="text" name="realisasi09" id="realisasi09" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Pembangunan Rehabilitasi/Peningkatan Sarana dan Prasarana Kepemudaaan & Olahraga Milik Desa</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran10">Anggaran</label>
                                                    <input type="text" name="anggaran10" id="anggaran10" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi10">Realisasi</label>
                                                    <input type="text" name="realisasi10" id="realisasi10" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Pelatihan dan Penyuluhan Perlindungan Anak</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran11">Anggaran</label>
                                                    <input type="text" name="anggaran11" id="anggaran11" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi11">Realisasi</label>
                                                    <input type="text" name="realisasi11" id="realisasi11" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Kegiatan Penanggulangan Bencana</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran12">Anggaran</label>
                                                    <input type="text" name="anggaran12" id="anggaran12" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi12">Realisasi</label>
                                                    <input type="text" name="realisasi12" id="realisasi12" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">Penanganan Keadaan Mendesak</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran13">Anggaran</label>
                                                    <input type="text" name="anggaran13" id="anggaran13" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi13">Realisasi</label>
                                                    <input type="text" name="realisasi13" id="realisasi13" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header pb-0 px3">
                            <h6 class="mb-0">{{ __('Pembiayaan') }}</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="mb-0">SLIPA Tahun Sebelumnya</h6>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="anggaran14">Anggaran</label>
                                                    <input type="text" name="anggaran14" id="anggaran14" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                                <div class="col">
                                                    <label for="realisasi14">Realisasi</label>
                                                    <input type="text" name="realisasi14" id="realisasi14" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp.1,000,000.00" class="form-control form-control-lg mb-3">
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><div class="custom-file">
                                    <input type="file" name="berkas" id="berkas">
                                    <label class="custom-file-label" for="berkas">Pilih Berkas</label>
                                </div></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
              



                






                </form>

            </div>
        </div>
    </div>
</div>
@endsection