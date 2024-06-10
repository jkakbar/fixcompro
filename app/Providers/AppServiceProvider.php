<?php

namespace App\Providers;

use App\Http\Middleware\AuthRedirect;
use App\Http\Middleware\NoCache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

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
        $this->app['router']->aliasMiddleware('nocache', NoCache::class);
        $this->app['router']->aliasMiddleware('authredirect', AuthRedirect::class);
    }
}
