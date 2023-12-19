<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    use HasFactory;
    protected $fillable = ['nama_desa', 'tahun_anggaran', 'total_realisasi', 'total_anggaran'];

}
