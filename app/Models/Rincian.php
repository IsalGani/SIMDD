<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rincian extends Model
{
    use HasFactory;

    protected $table = 'rincian';
    protected $fillable = ['jumlah_anggaran', 'jumlah_realisasi', 'id_sub_bidang'];

    public function subBidang()
    {
        return $this->belongsTo(SubBidang::class, 'id_sub_bidang');
    }
}
