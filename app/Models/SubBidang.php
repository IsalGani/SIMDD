<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    use HasFactory;

    protected $table = 'sub_bidang';
    protected $fillable = ['nama_sub_bidang', 'id_bidang'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }

    public function rincians()
    {
        return $this->hasMany(Rincian::class, 'id_sub_bidang');
    }
}
