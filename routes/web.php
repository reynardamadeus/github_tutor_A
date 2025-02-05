<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'getBook'])->name('homepage');
Route::post('/create-genre', [GenreController::class, 'createGenre'])->name('genre.create');
Route::post('/create-book', [BookController::class, 'createBook'])->name('book.create');
Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('book.delete');
Route::get('/edit-page/{id}', [BookController::class,'getEditPage' ])->name('book.edit.page');
Route::put('/update-book/{id}', [BookController::class, 'editBook'])->name('book.update');

