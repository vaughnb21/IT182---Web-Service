<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'bus_id',
        'ticket_id',
    ];

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}
