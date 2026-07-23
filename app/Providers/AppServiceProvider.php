<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            URL::forceScheme('https');
        } elseif (isset($_SERVER['HTTP_HOST']) && !str_contains($_SERVER['HTTP_HOST'], 'localhost') && !str_contains($_SERVER['HTTP_HOST'], '127.0.0.1')) {
            URL::forceScheme('https');
        }
    }
}
