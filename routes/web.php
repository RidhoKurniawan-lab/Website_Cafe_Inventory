<?php

use App\Http\Controllers\SidebarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('admins.dashboard'); }) ->name('dashboard');

    Route::get('/add_user', function () { return view('admins.master');})->name('add_master');

    Route::get('/get_sidebar',[SidebarController::class, 'get_sidebar'] )->name('get_sidebar');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::middleware('guest')->group(function () {
    Route::get('/', [UserController::class, 'login']) ->name('login');

    Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
});



