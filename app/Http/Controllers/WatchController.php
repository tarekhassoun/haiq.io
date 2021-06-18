<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Watch;

class WatchController extends Controller
{
    public function watchMovie ($movie_id) { $this->watch($user_id, $movie_id, 'movie'); }
    public function unwatchMovie ($movie_id) { $this->unwatch($user_id, $movie_id, 'movie'); }

    public function watch ($user_id, $event_id, $event_type)
    {
        Watch::firstOrCreate([
            'user_id' => $user_id,
            'event_id' => $event_id,
            'event_type' => $event_type
        ]);
    }

    public function unwatch ($user_id, $event_id, $event_type)
    {
        Watch::where('user_id', $user_id)->where('event_id', $event_id)->where('event_type', $event_type)->delete();
    }
}
