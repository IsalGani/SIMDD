<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = ['nama_desa'];

    public function tahunAnggarans()
    {
        return $this->hasMany(TahunAnggaran::class, 'id_desa');
    }

    protected static function booted()
    {
        static::creating(function ($desa) {
            // logika sebelum entitas Desa dibuat
        });
    }
}
