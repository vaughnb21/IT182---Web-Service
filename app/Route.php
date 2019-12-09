<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'from',
        'to',
        'deptime',
        'depdate',
        'fare',
    ];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
