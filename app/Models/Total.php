<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    use HasFactory;
    protected $fillable = ['nama_desa', 'tahun_anggaran', 'total_realisasi', 'total_anggaran'];

    protected $attributes = [
        'tahun_anggaran' => 0, // Sesuaikan dengan nilai default yang Anda inginkan
        'total_realisasi' => 0, // Sesuaikan dengan nilai default yang Anda inginkan
        'total_anggaran' => 0, // Sesuaikan dengan nilai default yang Anda inginkan
    ];

    public static function boot()
    {
        parent::boot();

        // Menambahkan aturan validasi pada kombinasi nama_desa dan tahun_anggaran
        static::creating(function ($total) {
            return !self::where('nama_desa', $total->nama_desa)
                ->where('tahun_anggaran', $total->tahun_anggaran)
                ->exists();
        });
        
    }


    public function subBidangs()
    {
        return $this->hasMany(SubBidang::class, 'tahun_anggaran', 'tahun_anggaran')->where('nama_desa', $this->nama_desa);
    }
}
