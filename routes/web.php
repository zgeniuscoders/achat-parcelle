<?php

use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/property', PropertyController::class);



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');

    Route::prefix('admin')->group(function () {
        Route::resource('property', AdminPropertyController::class)->names('admin.property');
    });
});
