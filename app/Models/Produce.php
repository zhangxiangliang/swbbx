<?php

namespace App\Models;

class Produce extends Model
{
    protected $fillable = [];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
