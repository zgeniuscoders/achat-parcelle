<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\Admin\QuaterController;
use App\Http\Controllers\Admin\TownshipController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/property', PropertyController::class);
Route::resource('agent', AgentController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('chats', [ChatController::class, 'index'])->name('chat');


    Route::middleware('redirect.admin')->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');

        Route::prefix('admin')->group(function () {
            Route::resource('property', AdminPropertyController::class)->names('admin.property');
            Route::resource('townships', TownshipController::class)->names('admin.townships')->only(['index', 'store', 'destroy', 'update']);
            Route::resource('quaters', QuaterController::class)->names('admin.quater')->only(['index', 'store', 'destroy', 'update']);
        });
    });
});
