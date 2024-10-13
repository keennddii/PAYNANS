<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});
//DASHBOARD
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
//PROFILE
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});

//LOGIN
Route::get('/login', function () {
    return view('auth.login'); // Replace with your actual login view
})->name('login');

//LOGOUT
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirects to the login page
})->name('logout');



