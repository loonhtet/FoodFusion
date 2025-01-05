<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Blade::componentNamespace('App\\View\\Components', 'users');

// Public home route
Route::get('/', function () {
    return view('landing.welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/about', function () {
    return view('about.about');
})->name('about');


Route::get('/admin-dashboard', function () {
    return view('admins.dashboard');
})->name('admin-dashboard');

// Guest routes (for non-authenticated users)
Route::middleware(['guest'])->group(function () {
    Route::view("/", "landing.welcome")->name('register');
    Route::post('/', [AuthController::class, 'register']);
        
    Route::view("/", "landing.welcome")->name('login');
    Route::post('/', [AuthController::class, 'login']);
});

// Protected routes (for authenticated users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


});
