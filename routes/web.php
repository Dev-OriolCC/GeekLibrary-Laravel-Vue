<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
