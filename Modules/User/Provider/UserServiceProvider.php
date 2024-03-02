<?php

namespace Modules\User\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(UserRepositoryPatternServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . "/../database/Migrations");

        Route::prefix("api")
            ->middleware(['api']) // can use Auth Sanctum
            ->group(__DIR__ . "/../Routes/api.php");
    }

    public function boot()
    {

    }
}
