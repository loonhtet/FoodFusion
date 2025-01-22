<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CookBookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReceipesController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

// Public routes
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
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Protected routes (for authenticated users)
Route::middleware(['auth'])->group(function () {
    // Admin Dashboard Routes
    Route::prefix('admin/dashboard')->middleware(['admin'])->group(function () {
        Route::get('/home', [AdminDashboardController::class, 'index'])->name('admin.dashboard.home');

        Route::get('/manageadmin', [AdminController::class, 'index'])->name('admin.dashboard.manageadmin');

        Route::get('/newadmin', [AdminController::class, 'create'])->name('admin.dashboard.newadmin');
        Route::post('/newadmin/store', [AdminController::class, 'store'])->name('admin.dashboard.store');

        Route::get('/manageusers', [UserController::class, 'index'])->name('admin.dashboard.manageusers');

        Route::get('/managerecipes', function () {
            return view('layouts.admin', ['section' => 'managerecipes']);
        })->name('admin.dashboard.managerecipes');

        Route::get('/settings', function () {
            return view('layouts.admin', ['section' => 'settings']);
        })->name('admin.dashboard.settings');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.dashboard.profile');
    });

    // Recipe routes
    Route::post('/recipe/store', [RecipeController::class, 'store'])->name('recipe.store');

    // User Dashboard Routes
    Route::get('/dashboard/cookbook', [CookBookController::class, 'index'])->name('dashboard.cookbook');

    Route::get('/dashboard/explore', function() {
        return view('layouts.user', ['section' => 'explore']);
    })->name('dashboard.explore');

    Route::get('/dashboard/favorites', function() {
        return view('layouts.user', ['section' => 'favorites']);
    })->name('dashboard.favorites');

    Route::get('/dashboard/settings', function() {
        return view('layouts.user', ['section' => 'settings']);
    })->name('dashboard.settings');

    Route::post('/dashboard/store', [ReceipesController::class, 'store'])->name('dashboard.store');

    // Main Application Routes
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::get('/educational', [EducationalController::class, 'index'])->name('educational');
    Route::get('/culinary', [CulinaryController::class, 'index'])->name('culinary');

    // Recipe Management
    Route::resource('recipes', ReceipesController::class);

    // Auth
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
