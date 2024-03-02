<?php

use Illuminate\Support\Facades\Route;
use Modules\Order\Http\Controllers\OrderController;

Route::prefix("order")->group(function (){
    Route::get("list" , [OrderController::class , 'list']);
    Route::post("create" , [OrderController::class , 'create']);
});
