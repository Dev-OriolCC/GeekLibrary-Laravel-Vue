<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\MailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Public 
Route::get('/books', [BooksController::class, 'index']);
Route::get('/books/{id}', [BooksController::class, 'show']);
Route::post('/mail', [MailsController::class, 'submit']);

// Auth
Route::post('/books', [BooksController::class, 'store']);
Route::put('/books/{id}', [BooksController::class, 'update']);
Route::delete('/books/{id}', [BooksController::class, 'destroy']);
Route::get('/totalBooks', [BooksController::class, 'totalBooks']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
