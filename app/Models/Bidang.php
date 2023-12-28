<?php

namespace App\Models;

use App\Models\SubBidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    protected $fillable = ['nama_bidang', 'id_tahun'];

    public function tahunAnggaran()
    {
        return $this->belongsTo(TahunAnggaran::class, 'id_tahun');
    }

    public function subBidangs()
    {
        return $this->hasMany(SubBidang::class, 'id_bidang');
    }
}
