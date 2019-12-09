<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses=Bus::all();

        return response()->json($buses);
    }

    public function show($id)
    {
        $bus=Bus::find($id);

        return response()->json($bus);
    }
}
