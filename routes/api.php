<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BoostController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\TownshipController;

Route::get('user', function () {
    return auth()->user()->id;
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::apiResource('users', UserController::class);
//     Route::apiResource("messages", MessageController::class)->except('index');
// });

Route::apiResource('users', UserController::class);
Route::apiResource("messages", MessageController::class)->except('index');
Route::apiResource("townships", TownshipController::class);
// Route::post('boost', [BoostController::class, 'store']);