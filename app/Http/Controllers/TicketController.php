<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets=Ticket::all();

        return response()->json($tickets);
    }

    public function show($id)
    {
        //$ticket=Ticket::find($id);
        $ticket=Ticket::find($id);
        
        return response()->json([
            'ticket' => [
                'name' => $ticket->name,
            ],
            'bus_name' => $ticket->bus->name,
            'route' => $ticket->route
        ]);
    }
}
