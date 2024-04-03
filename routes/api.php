<?php

use App\Http\Controllers\Api\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('user', function () {
    return auth()->user()->id;
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::apiResource('users', UserController::class);
//     Route::apiResource("messages", MessageController::class)->except('index');
// });

Route::apiResource('users', UserController::class);
Route::apiResource("messages", MessageController::class)->except('index');
