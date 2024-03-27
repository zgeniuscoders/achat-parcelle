<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/property', PropertyController::class);

