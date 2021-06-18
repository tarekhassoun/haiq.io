<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Movie;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {}

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('user.pages.home.index', function ($view)
        {
            $view->with('top_movies', Movie::orderBy('tmdb_popularity', 'desc')->limit(12)->get());
        });
    }
}
