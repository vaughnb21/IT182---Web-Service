<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes=Route::all();

        return response()->json($routes);
    }

    public function show($id)
    {
        $route=Route::find($id);

        return response()->json($route);
    }

    public function searchRoute($query)
    {
        $search = Route::where('to', 'LIKE', '%' . $query . '%')
        ->orWhere('fare', 'LIKE', '%' . $query . '%')->get();

        return response()->json([
            'query_results' => $search
        ]);
    }
}
