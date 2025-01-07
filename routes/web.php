<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReceipesController;
use Illuminate\Support\Facades\Route;

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

// Guest routes (for non-authenticated users)
Route::middleware(['guest'])->group(function () {
    Route::view("/", "landing.welcome")->name('register');
    // Register route
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    
    // Login route
    Route::post('/login', [AuthController::class, 'login'])->name('login');

});





// Protected routes (for authenticated users)
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',[ReceipesController::class,'index'])->name('dashboard');

    
    Route::resource('/dashboard', ReceipesController::class)->names([
        'store' => 'dashboard.store',
        'destroy' => 'dashboard.destroy',
    ]);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
