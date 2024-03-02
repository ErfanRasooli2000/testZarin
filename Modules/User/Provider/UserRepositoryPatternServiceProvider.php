<?php

namespace Modules\User\Provider;

use Illuminate\Support\ServiceProvider;
use Modules\User\database\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\database\Repositories\Repos\UserRepository;

class UserRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class , UserRepository::class);
    }

    public function boot()
    {

    }
}
