<?php

namespace Modules\Order\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(OrderRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../database/Migrations");

        Route::prefix("api")
            ->middleware(['api' , 'auth:sanctum'])
            ->group(__DIR__ . "/../Routes/api.php");
    }

    public function boot()
    {

    }
}
