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

    public function baseSkills()
    {
        return $this->hasMany(Skill::class)->where('skills.type', 'normal');
    }

    public function mountSkills()
    {
        return $this->hasMany(Skill::class)->where('skills.type', 'mount');
    }

    public function flySkills()
    {
        return $this->hasMany(Skill::class)->where('skills.type', 'fly');
    }
}
