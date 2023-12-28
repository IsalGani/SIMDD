<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAnggaran extends Model
{
    use HasFactory;

    protected $table = 'tahun_anggaran';
    protected $fillable = ['tahun', 'id_desa'];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa');
    }

    public function bidangs()
    {
        return $this->hasMany(Bidang::class, 'id_tahun');
    }
}
