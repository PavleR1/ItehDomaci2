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
Route::get('filmovi', 'App\Http\Controllers\BioskopController@getAll');
Route::get('filmovi/{id}', 'App\Http\Controllers\BioskopController@getById');
Route::get('projekcije', 'App\Http\Controllers\FilmController@getAll');
Route::get('projekcije/{id}', 'App\Http\Controllers\FilmController@getById');
Route::get('karte', 'App\Http\Controllers\KarteController@getAll');
Route::get('karte/{id}', 'App\Http\Controllers\KarteController@getById');
Route::post('filmovi', 'App\Http\Controllers\BioskopController@save');
Route::post('projekcije', 'App\Http\Controllers\FilmController@save');
Route::delete('filmovi/{id}', 'App\Http\Controllers\BioskopController@delete');
Route::delete('projekcije/{id}', 'App\Http\Controllers\FilmController@delete');

