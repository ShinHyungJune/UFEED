<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HiSecureController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisteredUserController::class, 'create'])
//                ->name('register');
//
//    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::prefix('hi-secure')->group(function () {
        Route::get('/', [HiSecureController::class, 'index'])->name('hi-secure.index');
        Route::post('/', [HiSecureController::class, 'store'])->name('hi-secure.store');
        Route::get('/create', [HiSecureController::class, 'create'])->name('hi-secure.create');
        Route::patch('/{user}', [HiSecureController::class, 'update'])->name('hi-secure.update');
        Route::patch('/{user}/switch', [HiSecureController::class, 'switch'])->name('hi-secure.switch');
        Route::delete('/', [HiSecureController::class, 'delete'])->name('hi-secure.delete');
        Route::get('/{user}/edit', [HiSecureController::class, 'edit'])->name('hi-secure.edit');
        Route::get('/global-setting', [HiSecureController::class, 'globalSetting'])->name('hi-secure.global-setting');
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
