<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Public home route
Route::get('/', function () {
    return view('landing.welcome');
})->name('home');

// Guest routes (for non-authenticated users)
Route::middleware(['guest'])->group(function () {
    Route::view("/register", "auth.register")->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::view("/login", "auth.login")->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected routes (for authenticated users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
