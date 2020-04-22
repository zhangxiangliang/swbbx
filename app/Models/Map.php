<?php

namespace App\Models;

class Map extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Npc::class);
    }

    public function npcs()
    {
        return $this->hasMany(Npc::class);
    }
}
