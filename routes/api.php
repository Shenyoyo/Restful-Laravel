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
Route::apiResource('animals', 'Api\AnimalController');
Route::apiResource('types', 'Api\TypeController');
// 這裡可以用 like 辨識
Route::post('animals/{animal}/like', 'Api\AnimalController@like');