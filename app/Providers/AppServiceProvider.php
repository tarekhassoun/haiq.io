<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $theme = Cookie::get("hai_theme");

            if ($theme != 'dark' && $theme != 'light') {
                $theme = 'light';
            }

            $icon = ($theme == 'light') ? 'moon' : 'sun';

            $view->with('theme_class', $theme);
            $view->with('fa_icon', $icon);
        });
    }
}
