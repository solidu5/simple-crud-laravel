<?php
use App\Http\Controllers\BookController;
Route::get('/', function() { return redirect('/books'); });

Route::get('/books/add', [BookController::class, 'create']);

Route::get('/books', [BookController::class, 'index']);

Route::post('/books', [BookController::class, 'store']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::put('/books/{id}', [BookController::class, 'update']);

Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::get('/books/edit/{id}', [BookController::class, 'edit']);
