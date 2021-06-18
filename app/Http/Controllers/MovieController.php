<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{

    public function getSingleView ($slug)
    {
        $movie = Movie::where("slug", "=", $slug)->first();

        return view('user.pages.movies.single', compact('movie'));
    }
}
