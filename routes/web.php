<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeminjamanController;

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
    return view('welcome');
});


Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//Category 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('/category', [CategoryController::class, 'update']);
Route::get('/tambah-category', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/hapus-category/{id}', [CategoryController::class, 'destroy']);

//Book

Route::get('/book', [BookController::class, 'index']);
Route::get('/book-tambah', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/hapus-book/{id}', [BookController::class, 'destroy']);
Route::get('/edit-book/{id}', [BookController::class, 'edit']);
Route::put('/book', [BookController::class, 'update']);

//Dashboard

Route::get('/dashboard', [DashboardController::class, 'index']);

//Peminjaman

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/peminjaman-tambah', [PeminjamanController::class, 'create']);



//Koleksi

Route::get('/koleksi', [KoleksiController::class, 'index']);


//Ulasan

Route::get('/ulasan', [UlasanController::class, 'index']);
Route::get('/ulasan-create', [UlasanController::class, 'create']);

