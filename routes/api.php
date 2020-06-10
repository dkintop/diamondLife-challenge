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

//middleware added due to Cors errors
Route::group(['middleware'=> 'cors'], function(){
Route::post('fibonacci', function(Request $request){
    
    $inputInt = intval($request->input('param'));

    return response()->json([
        'testOutput' => $inputInt
    ]);
    
});
});

//logic handled within route, thou I am ssure there is a better way to do this