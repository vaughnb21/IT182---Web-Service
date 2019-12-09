<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'name',
        'type',
        'maxseats',
    ];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
