<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @block void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @block void
     */
    public function boot()
    {
        if (env('APP_ENV') === 'production' || env('APP_URL') !== 'http://localhost') {
            URL::forceScheme('https');
        }
    }
}
