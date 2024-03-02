<?php

namespace Modules\Transaction\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Transaction\Services\TransactionService;

class TransactionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../database/Migrations");

        $this->app->singleton('transaction' , function(){
            return new TransactionService();
        });
    }

    public function boot()
    {

    }
}
