<?php

namespace Modules\Order\Provider;

use Illuminate\Support\ServiceProvider;
use Modules\Order\database\Repositories\Contracts\OrderRepositoryInterface;
use Modules\Order\database\Repositories\Repos\OrderRepository;

class OrderRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OrderRepositoryInterface::class , OrderRepository::class);
    }

    public function boot()
    {

    }
}
