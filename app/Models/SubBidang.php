<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_sub_bidang', 'realisasi_bidang', 'anggaran_bidang', 'nama_bidang', 'tahun_anggaran'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, ['nama_bidang', 'tahun_anggaran'], ['nama_bidang', 'tahun_anggaran']);
    }
}
