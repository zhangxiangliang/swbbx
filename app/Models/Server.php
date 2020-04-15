<?php

namespace App\Models;

class Server extends Model
{
    protected $fillable = [];

    protected $casts = [
        'birthday' => 'datetime:Y-m-d H:i:s',
    ];

    public function subjects()
    {
        return $this->hasMany(Server::class, 'id', 'pid');
    }
}
