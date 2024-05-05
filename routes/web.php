<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\BoostController;
use App\Http\Controllers\Admin\QuaterController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TownshipController;
use App\Http\Controllers\Admin\ReportingController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/property', PropertyController::class);
Route::resource('agent', AgentController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('chats', [ChatController::class, 'index'])->name('chat');

    Route::prefix("admin")->group(function () {
        Route::middleware('redirect.superAdmin')->group(function () {
            Route::resource("users", UserController::class)->names("admin.user");
            Route::resource("roles", RoleController::class)->names("admin.role")->except(["show", "create"]);
        });

        Route::middleware('redirect.admin')->group(function () {
            Route::get('chats', MessageController::class)->name('admin.chat');
            Route::get('/', [AdminController::class, 'index'])->name('admin');

            // Route::get('boost/{property}', [BoostController::class, 'show'])->name('boost.show');
            // Route::post('boost', [BoostController::class, 'boost'])->name('boost.boost');
            Route::resource('category', CategoryController::class)->names("admin.category")->except(['show', 'create']);
            Route::resource("reporting", ReportingController::class);
            Route::resource('property', AdminPropertyController::class)->names('admin.property');
            Route::resource('townships', TownshipController::class)->names('admin.townships')->only(['index', 'store', 'destroy', 'update']);
            Route::resource('quaters', QuaterController::class)->names('admin.quater')->only(['index', 'store', 'destroy', 'update']);
        });
    });
});
