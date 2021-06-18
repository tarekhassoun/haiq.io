<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which is assigned the "api" middleware group.
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'watch'], function ()
{
    Route::group(['prefix' => 'movie'], function ()
    {
        Route::post('/{movie_id}', 'App\Http\Controllers\WatchController@watchMovie');
        Route::delete('/{movie_id}', 'App\Http\Controllers\WatchController@unwatchMovie');
    });
});
