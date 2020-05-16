<?php

namespace App\Models;

class Meeting extends Model
{
    public function maps()
    {
        return $this->belongsToMany(Map::class)->withPivot('x', 'y');
    }

    public function official()
    {
        return $this->belongsTo(Official::class);
    }

    public function levelExperience()
    {
        return $this->belongsTo(LevelExperience::class);
    }
}
