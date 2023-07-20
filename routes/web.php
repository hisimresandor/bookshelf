<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/books', [BookController::class, 'index'])->name('index')->middleware('auth');

Route::post('/books', [BookController::class, 'store'])->name('store')->middleware('auth');

Route::get('/books/create', [BookController::class, 'create'])->name('create')->middleware('auth');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('edit')->middleware('auth');

Route::put('/books/{book}', [BookController::class, 'update'])->name('update')->middleware('auth');

Route::delete('/books/{book}/delete', [BookController::class, 'destroy'])->name('destroy')->middleware('auth');

Route::get('/books/{book}', [BookController::class, 'show'])->name('show')->middleware('auth');

Route::get('/', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');