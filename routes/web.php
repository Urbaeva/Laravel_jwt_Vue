<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', [IndexController::class, 'index'])->where('page', '.*');
