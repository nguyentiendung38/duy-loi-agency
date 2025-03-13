<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    // Path to the "home" route for your application.
    public const HOME = '/home';

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                 ->group(base_path('routes/web.php'));

            Route::prefix('api')
                 ->middleware('api')
                 ->group(base_path('routes/api.php'));
        });
    }
}