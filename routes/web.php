<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


// layanan
Route::get('/admin/layanan', [Layanan::class, 'index']);
Route::get('/admin/layanan/insert', [Layanan::class, 'insert']);
Route::post('/admin/layanan/store', [Layanan::class, 'store']);
Route::get('/admin/layanan/edit/{id}', [Layanan::class, 'edit']);
Route::post('/admin/layanan/update/{id}', [Layanan::class, 'update'])->name('update');
Route::get('/admin/layanan/delete/{id}', [Layanan::class, 'delete']);
// memanggil main
Route::get('/layanan', [Layanan::class, 'main']);
// memanggil pesan
Route::get('/pesan', [layanan::class, 'forms']);
Route::post('/pesan', [layanan::class, 'order']);
// memanggil history pesan
Route::get('/history', [Layanan::class, 'history']);
// memanggil login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
});

//memanggil register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'postregister'])->name('postregister');
