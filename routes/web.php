<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/property', PropertyController::class);
Route::resource('agent', AgentController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('chats', [ChatController::class, 'index'])->name('chat');


    Route::middleware('redirect.admin')->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');

        Route::prefix('admin')->group(function () {
            Route::resource('property', AdminPropertyController::class)->names('admin.property');
        });
    });
});
