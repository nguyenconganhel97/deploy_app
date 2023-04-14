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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', 'App\Http\Controllers\PostController@store');
Route::get('/post/edit/{id}', 'App\Http\Controllers\PostController@edit');
Route::post('/post/update/{id}', 'App\Http\Controllers\PostController@update');
Route::delete('/post/delete/{id}', 'App\Http\Controllers\PostController@delete');
Route::get('/posts', 'App\Http\Controllers\PostController@index');
