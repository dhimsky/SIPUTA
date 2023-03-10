<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\CariController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Mahasiswa2Controller;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UbahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\TampilController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('login',[LoginController::class,'index'])->name('login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['CekUserLogin:1']], function(){
        Route::get('tampil', [TampilController::class, 'index'])->middleware('auth');
        Route::resource('manage',ManageController::class);
        Route::get('akun', [AkunController::class, 'tampilkanTabel'])->middleware('auth');
    });

    Route::group(['middleware' => ['CekUserLogin:2']], function(){
        Route::get('mahasiswa2', [Mahasiswa2Controller::class, 'index'])->middleware('auth');
        Route::resource('daftar',DaftarController::class);
        Route::resource('ubah',UbahController::class);
    });
});

Route::resource('mahasiswa',mahasiswaController::class);