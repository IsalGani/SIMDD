<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = ['name'];

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function realizations()
    {
        return $this->hasMany(Realization::class);
    }
}
