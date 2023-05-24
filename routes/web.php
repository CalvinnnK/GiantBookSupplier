<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

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

Route::get('/', [BookController::class, 'show'])->name('home');
Route::get('/book/{bookid?}', [BookController::class, 'bookDetails'])->name('book');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category');
Route::get('/publisher', [PublisherController::class, 'showall'])->name('publisher');
Route::get('/publisher/{publisher}', [PublisherController::class, 'showbooks'])->name('pubdetail');
Route::get('/contacts', function(){return view('contacts');})->name('contacts');
    

