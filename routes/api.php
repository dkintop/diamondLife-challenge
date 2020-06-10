<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::post('fibonacci', 'FibonacciController@fibonacci');
Route::post('fibonacci', function(Request $request){
    return response()->json([
        'testOutput' => $request->input('param')
    ]);
    
});

//logic to return correct response will go here