<?php

use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Public 
Route::get('/books', [BooksController::class, 'index']);
Route::get('/books/{id}', [BooksController::class, 'show']);

// Auth
Route::post('/books', [BooksController::class, 'store']);
Route::put('/books/{id}', [BooksController::class, 'update']);
Route::delete('/books/{id}', [BooksController::class, 'destroy']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
