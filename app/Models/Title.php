<?php

namespace App\Models;

class Title extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'tags' => 'json',
    ];

    public function npc()
    {
        return $this->belongsTo(Npc::class);
    }

    public function map()
    {
        return $this->belongsTo(Map::class);
    }
}
