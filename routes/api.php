<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Public 
Route::get('/books', [BooksController::class, 'index']);
Route::get('/book/{id}/edit', [BooksController::class, 'show']);
Route::post('/mail', [MailsController::class, 'submit']);

// Auth
Route::post('/books', [BooksController::class, 'store']);
Route::put('/book/{id}', [BooksController::class, 'update']);
Route::delete('/book/{id}', [BooksController::class, 'destroy']);
Route::get('/totalBooks', [BooksController::class, 'totalBooks']);

Route::get('/getUser', [AppController::class, 'getUser']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
