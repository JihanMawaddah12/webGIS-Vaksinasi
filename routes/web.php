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
Route::group(
    ['middleware' => ['AuthCheck:admin']],
    function () {
        Route::get('/home/{tematik_id?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/rute', [App\Http\Controllers\RouteMap::class, 'index'])->name('Rute');
        Route::get('/maps-user', [App\Http\Controllers\UserController::class, 'map'])->name('Map user');
        Route::get('/data-user/{tematik_id?}', [App\Http\Controllers\UserController::class, 'data'])->name('Data user');
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
        Route::get('/pendaftaran', [App\Http\Controllers\RouteMap::class, 'pendaftaran'])->name('pendaftaran map');
        Route::get('/rumah-sakit', [App\Http\Controllers\RumahSakitController::class, 'index'])->name('rumah sakit');
        Route::post('/daftar', [App\Http\Controllers\RouteMap::class, 'daftar'])->name('daftar');
        Route::post('/rumahsakit-post', [App\Http\Controllers\RumahSakitController::class, 'store'])->name('post rumahsakit');
        Route::get('/rumahsakit-delete/{id}', [App\Http\Controllers\RumahSakitController::class, 'destroy'])->name('delete rumahsakit');
        Route::get('/rumahsakit-tambah', [App\Http\Controllers\RumahSakitController::class, 'create'])->name('tambah rumahsakit');
        Route::get('/rumahsakit-edit/{id}', [App\Http\Controllers\RumahSakitController::class, 'edit'])->name('edit rumahsakit');
        Route::post('/rumahsakit-update', [App\Http\Controllers\RumahSakitController::class, 'update'])->name('update rumahsakit');
    }
);
Route::group(['middleware' => ['AuthCheck:rm']], function () {
    Route::get('/rm/dashboard', [App\Http\Controllers\RumahSakit::class, 'index'])->name('rm dashboard');
    Route::get('/rm/pendaftaran-delete/{id}', [App\Http\Controllers\RumahSakit::class, 'destroy'])->name('pendaftaran hapus');
});
