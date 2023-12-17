<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $fillable = ['nama_proyek', 'anggaran', 'realisasi', 'tahun_id', 'desa_id'];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id');
    }
}
