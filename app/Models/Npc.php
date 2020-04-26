<?php

namespace App\Models;

class Npc extends Model
{
    public function map()
    {
        return $this->belongsTo(Map::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Produce::class);
    }

    public function friends()
    {
        return $this->belongsToMany(Npc::class, 'npc_friend', 'npc_id', 'friend_id');
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
