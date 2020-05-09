<?php

namespace App\Models;

class Skill extends Model
{
    public function npc()
    {
        return $this->belongsTo(Npc::class);
    }

    public function map()
    {
        return $this->belongsTo(Map::class);
    }
}
