<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['amount', 'year'];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
