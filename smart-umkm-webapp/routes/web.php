<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::middleware('role:owner')->group(function () {

        Route::get('/owner', function () {
            return view('dashboard.owner');
        });

    });

    Route::middleware('role:admin')->group(function () {

        Route::get('/admin', function () {
            return view('dashboard.admin');
        });

    });

    Route::middleware('role:kasir')->group(function () {

        Route::get('/kasir', function () {
            return view('dashboard.kasir');
        });

    });

});

require __DIR__.'/auth.php';