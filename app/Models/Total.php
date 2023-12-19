<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    use HasFactory;
    protected $fillable = ['nama_desa', 'tahun_anggaran', 'total_realisasi', 'total_anggaran'];

    public static function boot()
    {
        parent::boot();

        // Menambahkan aturan validasi unik pada kombinasi nama_desa dan tahun_anggaran
        static::creating(function ($total) {
            return !self::where('nama_desa', $total->nama_desa)
                ->where('tahun_anggaran', $total->tahun_anggaran)
                ->exists();
        });
    }
}
