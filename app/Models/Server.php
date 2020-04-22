<?php

namespace App\Models;

class Server extends Model
{
    protected $fillable = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'birthday' => 'datetime:Y-m-d H:i:s',
    ];

    public function scopeRecent($query)
    {
        return $query->orderBy('birthday', 'desc');
    }

    public function branches()
    {
        return $this->hasMany(Server::class, 'id', 'pid');
    }

    public function master()
    {
        return $this->hasOne(Server::class, 'pid', 'id');
    }
}
