<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

    Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index'])->name('mobil');
    Route::post('/tambah_mobil',[App\Http\Controllers\MobilController::class, 'create'])->name('tambah_mobil');
    Route::get('/edit_mobil/{id}',[App\Http\Controllers\MobilController::class, 'edit'])->name('edit_mobil');
    Route::post('/update_mobil/{id}',[App\Http\Controllers\MobilController::class, 'update'])->name('update_mobil');
    Route::get('/delete_mobil/{id}',[App\Http\Controllers\MobilController::class, 'destroy'])->name('delete_mobil');

    Route::get('/peminjaman', [App\Http\Controllers\PeminjamanController::class, 'index'])->name('peminjaman');
    Route::post('/tambah_peminjaman',[App\Http\Controllers\PeminjamanController::class, 'store'])->name('tambah_peminjaman');
    Route::get('/delete_peminjaman/{id}',[App\Http\Controllers\PeminjamanController::class, 'destroy'])->name('delete_peminjaman');

    Route::get('/kembali', [App\Http\Controllers\PeminjamanController::class, 'kembali'])->name('kembali');

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::post('/tambah_user',[App\Http\Controllers\UserController::class, 'create'])->name('tambah_user');
    Route::get('/edit_user/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('edit_user');
    Route::post('/update_user/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('update_user');
    Route::get('/delete_user/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('delete_user');

    Route::get('/kembaliform', [App\Http\Controllers\PeminjamanController::class, 'create2'])->name('kembaliform');
    Route::get('/peminjamanform', [App\Http\Controllers\PeminjamanController::class, 'create'])->name('peminjamanform');

});

// Auth::routes();