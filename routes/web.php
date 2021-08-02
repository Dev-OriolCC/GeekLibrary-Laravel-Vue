<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
