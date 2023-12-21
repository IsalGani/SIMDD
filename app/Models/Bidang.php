<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_bidang'];

    public function subBidangs()
    {
        return $this->hasMany(SubBidang::class, 'bidang_id');
    }
}
