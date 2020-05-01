<?php

namespace App\Models;

class LevelExperience extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'star' => 'json',
    ];
}
