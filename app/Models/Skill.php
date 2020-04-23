<?php

namespace App\Models;

class Skill extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Npc::class);
    }

    public function school()
    {
        return $this->belongsTo(Map::class);
    }
}
