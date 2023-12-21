<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_sub_bidang', 'realisasi_bidang', 'anggaran_bidang', 'bidang_id', 'tahun_anggaran'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
