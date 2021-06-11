<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('user/pages/home/index'); })->name('homepage');

Route::group(['prefix' => 'calendar'], function ()
{
    Route::get('/', function () { return view('user/pages/calendar/index'); })->name('calendar');
    Route::get('/{date}', function () { return view('user/pages/calendar/date'); })->name('calendar.date');
    Route::get('/{date}/{type}', function () { return view('user/pages/calendar/date'); })->name('calendar.date.type');
});

Route::group(['prefix' => 'user'], function ()
{
    Route::get('/{user_id}', 'App\Http\Controllers\UserController@getByID')
        ->name('public.user.get.id');

    Route::get('/{user_id}/events', 'App\Http\Controllers\UserController@events')
        ->name('public.user.get.events');

    Route::get('/{user_id}/events/{date}', 'App\Http\Controllers\UserController@eventsByDate')
        ->name('public.user.get.events.date');

    Route::post('/{user_id}/event/{event_id}', 'App\Http\Controllers\UserController@followEvent')
        ->name('public.user.add.event');

    Route::delete('/{user_id}/event/{event_id}', 'App\Http\Controllers\UserController@unfollowEvent')
        ->name('public.user.remove.event');
});


