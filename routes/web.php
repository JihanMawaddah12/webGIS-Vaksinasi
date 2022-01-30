<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/halaman_data', [App\Http\Controllers\HalamanData::class, 'index'])->name('halaman data');
Route::post('/input_data', [App\Http\Controllers\HalamanData::class, 'store'])->name('data vaksin');
Route::get('/edit_data/{id}', [App\Http\Controllers\HalamanData::class, 'edit'])->name('edit data');
Route::post('/update_data/{id}', [App\Http\Controllers\HalamanData::class, 'update'])->name('update data');
Route::get('/delete_data/{id}', [App\Http\Controllers\HalamanData::class, 'destroy'])->name('delete data');
Route::get('/tambah_data', [App\Http\Controllers\HalamanData::class, 'create'])->name('tambah data');
Route::get('/halaman_tematik', [App\Http\Controllers\TematikController::class, 'index'])->name('halaman tematik');
Route::get('/tambah_tematik', [App\Http\Controllers\TematikController::class, 'create'])->name('tambah tematik');
Route::post('/input_tematik', [App\Http\Controllers\TematikController::class, 'store'])->name('data tematik');
Route::get('/edit_tematik/{id}', [App\Http\Controllers\TematikController::class, 'edit'])->name('edit tematik');
Route::post('/update_tematik/{id}', [App\Http\Controllers\TematikController::class, 'update'])->name('update tematik');
Route::get('/delete_tematik/{id}', [App\Http\Controllers\TematikController::class, 'destroy'])->name('delete tematik');
Route::get('/maps', [App\Http\Controllers\MapController::class, 'index'])->name('maps');
Route::get('/halaman_data2', [App\Http\Controllers\HalamanData2::class, 'index'])->name('halaman data2');
Route::post('/input_data2', [App\Http\Controllers\HalamanData2::class, 'store'])->name('data lokasi');
Route::get('/edit_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'edit'])->name('edit data2');
Route::post('/update_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'update'])->name('update data2');
Route::get('/delete_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'destroy'])->name('delete data2');
Route::get('/tambah_data2', [App\Http\Controllers\HalamanData2::class, 'create'])->name('tambah data2');
Route::get('/detail_map/{id}', [App\Http\Controllers\HalamanData2::class, 'show'])->name('detail map');
