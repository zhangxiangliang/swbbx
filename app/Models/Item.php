<?php

namespace App\Models;

class Item extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'keywords' => 'json',
        'maps' => 'json',
    ];
}
