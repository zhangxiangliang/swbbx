<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    public function level()
    {
        return $this->belongsTo(LevelExperience::class);
    }
}
