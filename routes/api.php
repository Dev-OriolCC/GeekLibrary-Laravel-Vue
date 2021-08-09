<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Public 
Route::post('/mail', [MailsController::class, 'submit']);

// Books
Route::get('/books', [BooksController::class, 'index']);
Route::get('/book/{id}/edit', [BooksController::class, 'show']);
Route::post('/books', [BooksController::class, 'store']);
Route::put('/book/{id}', [BooksController::class, 'update']);
Route::delete('/book/{id}', [BooksController::class, 'destroy']);
Route::get('/totalBooks', [BooksController::class, 'totalBooks']);

// Mail Contacts
Route::get('/getContacts', [MailsController::class, 'getContacts']);
Route::get('/getViewedContacts', [MailsController::class, 'getViewedContacts']);
Route::get('/totalViewedContacts', [MailsController::class, 'totalViewedContacts']);
Route::get('/totalUnviewedContacts', [MailsController::class, 'totalUnviewedContacts']);
Route::get('/totalContacts', [MailsController::class, 'getContactsTotal']);
Route::put('/updateMail/{id}', [MailsController::class, 'updateMail']);
// Category
Route::get('/getCategories', [CategoriesController::class, 'getCategories']);
Route::post('/storeCategory', [CategoriesController::class, 'store']);
Route::get('/showCategory/{id}/edit', [CategoriesController::class, 'show']);
Route::put('/updateCategory/{id}', [CategoriesController::class, 'update']);
Route::delete('/destroyCategory/{id}', [CategoriesController::class, 'destroyCat']);
Route::get('/categoryTotalBooks/{id}', [CategoriesController::class, 'categoryTotalBooks']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
