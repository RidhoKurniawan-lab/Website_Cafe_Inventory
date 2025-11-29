<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('admins.dashboard'); }) ->name('dashboard');
Route::get('/add_master', function () { return view('admins.master');})->name('add_master');
