<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NamaController;
use App\Http\Controllers\PengenalanController;

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
    return view('home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Home/Hapus/{id}',[HomeController::class,'HapusHome'])->name("Home.Hapus");


Route::get('formnama',[App\Http\Controllers\NamaController::class,'tampilform'])->name("formnama");
Route::post('nama/create', [App\Http\Controllers\NamaController::class,'createform'])->name("nama.create");
Route::get('nama/hapus/{id}',[App\Http\Controllers\NamaController::class,'hapus'])->name("hapus.nama");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pengenalan/form',[PengenalanController::class,'tampilform'])->name("pengenalan.form");
Route::post('/pengenalan/create',[PengenalanController::class,'buatpengenalan'])->name("pengenalan.create");
Route::get('/pengenalan/hapus/{id}',[PengenalanController::class,'hapuspengenalan'])->name("pengenalan.hapus");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Pengenalan/form',[JabatanController::class,'tampilform'])->name("jabatan.form");


