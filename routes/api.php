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

Route::get('/v1/cars', function (Request $request) {
    return 'From the server: details of two cars';
});

Route::get('/v2/cars', function (Request $request) {
    return response()->json([
        'cars' => [
            'registration' => 'ABC001',
            'dateRegistered' => '2019-01-01',
            'color' => 'black',
            'make' => 'tesla',
            'model' => 's'
        ]
    ], 200);
});

Route::middleware('auth:api')->get('/v3/cars', function (Request $request) {
    return response()->json([
        'cars' => [
            'registration' => 'ABC001',
            'dateRegistered' => '2019-01-01',
            'color' => 'black',
            'make' => 'tesla',
            'model' => 's'
        ]
    ], 200);
});

Route::get('/users', function (Request $request) {
//    echo $request->user();
//    return response()->json([
//        'user' => [
//            'username' => $request->user()["email"] ,
//            'password' => $request->user()["password"],
//        ]
//    ], 200);

    return response()->json([
        'user' => [
            'username' => 'admin',
            'password' => 'admin',
        ]
    ], 200);
});

Route::middleware(['auth:api'])->get('/v4/cars', 'Controller_Cars@get');

Route::middleware(['auth:api'])->group(function () {
    Route::post('/v1/cars', 'Controller_Cars@post');
    Route::get('/v1/cars', 'Controller_Cars@get');
    Route::put('/v1/cars', 'Controller_Cars@put');
    Route::delete('/v1/cars', 'Controller_Cars@delete');
    Route::post('/v1/motorbikes', 'Controller_Motorbikes@post');
    Route::get('/v1/motorbikes ', 'Controller_ Motorbikes @get');
    Route::put('/v1/motorbikes ', 'Controller_ Motorbikes @put');
    Route::delete('/v1/motorbikes ', 'Controller_ Motorbikes @delete');
});

