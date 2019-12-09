<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('buses', 'BusController');
Route::apiResource('routes', 'RouteController');
Route::apiResource('tickets', 'TicketController');
Route::get('routes/search/{query}', 'RouteController@searchRoute');
Route::get('buses/search/{query}', 'BusController@searchBus');