<?php

use App\Http\Controllers\Api\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::apiResource('users', UserController::class);
Route::apiResource("messages", MessageController::class)->except('index');
