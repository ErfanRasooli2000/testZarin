<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\UserFollowController;

Route::get("token/{user}" , [UserController::class , 'getToken']);

Route::middleware(["auth:sanctum"])->group(function(){
    Route::post("follow" , [UserFollowController::class , 'follow']);
});
