<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin');

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('frontend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

// Users 
Route::middleware('auth')->group(function(){
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('users.destroy');
    

    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');
    Route::get('/books/edit/{book_id}', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/books/update/{book_id}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('/books/delete/{book_id}', [BooksController::class, 'delete'])->name('books.destroy');

    Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
    Route::get('/authors/create', [AuthorsController::class, 'create'])->name('authors.create');
    Route::post('/authors/store', [AuthorsController::class, 'store'])->name('authors.store');
    Route::get('/authors/edit/{author_id}', [AuthorsController::class, 'edit'])->name('authors.edit');
    Route::put('/authors/update/{author_id}', [AuthorsController::class, 'update'])->name('authors.update');
    Route::delete('/authors/delete/{author_id}', [AuthorsController::class, 'delete'])->name('authors.destroy');
    Route::get('/authors/find', [AuthorsController::class, 'find'])->name('authors.find');
});

