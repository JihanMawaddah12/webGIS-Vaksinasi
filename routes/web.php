<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/artisan/storage', function () {
    Artisan::call('db:seed', [
        '--force' => true
    ]);
    Artisan::call('storage:link');
});
Auth::routes();
Route::post('/import', [ App\Http\Controllers\HalamanData::class, 'import'])->name('import');
Route::get('/', [App\Http\Controllers\UserController::class, 'data'])->name('Data user');
Route::get('/panduan', [App\Http\Controllers\PanduanController::class, 'index'])->name('panduan');
Route::get('/panduan-user', [App\Http\Controllers\PanduanController::class, 'user'])->name('panduan-user');
Route::get('/portal/{tematik_id?}', [App\Http\Controllers\UserController::class, 'data'])->name('portal');
Route::get('/pendaftaran', [App\Http\Controllers\RouteMap::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/daftar', [App\Http\Controllers\RouteMap::class, 'daftar'])->name('daftar');

Route::get('/home/{tematik_id?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rute', [App\Http\Controllers\RouteMap::class, 'index'])->name('Rute');
Route::get('/rute-user', [App\Http\Controllers\RouteMap::class, 'user'])->name('RuteUser');
Route::get('/maps-user', [App\Http\Controllers\UserController::class, 'map'])->name('Map user');
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
Route::get('/halaman_desa', [App\Http\Controllers\DesaController::class, 'index'])->name('halaman desa');
Route::get('/tambah_desa', [App\Http\Controllers\DesaController::class, 'create'])->name('tambah desa');
Route::post('/input_desa', [App\Http\Controllers\DesaController::class, 'store'])->name('data desa');
Route::get('/edit_desa/{id}', [App\Http\Controllers\DesaController::class, 'edit'])->name('edit desa');
Route::post('/update_desa/{id}', [App\Http\Controllers\DesaController::class, 'update'])->name('update desa');
Route::get('/delete_desa/{id}', [App\Http\Controllers\DesaController::class, 'destroy'])->name('delete desa');
Route::get('/maps', [App\Http\Controllers\MapController::class, 'index'])->name('maps');
Route::get('/maps_lokasi', [App\Http\Controllers\MapController::class, 'indexTitik'])->name('maps lokasi');
Route::get('/maps_desa', [App\Http\Controllers\MapController::class, 'indexDesa'])->name('maps desa');
Route::get('/halaman_data2', [App\Http\Controllers\HalamanData2::class, 'index'])->name('halaman data2');
Route::post('/input_data2', [App\Http\Controllers\HalamanData2::class, 'store'])->name('data lokasi');
Route::get('/edit_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'edit'])->name('edit data2');
Route::post('/update_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'update'])->name('update data2');
Route::get('/delete_data2/{id}', [App\Http\Controllers\HalamanData2::class, 'destroy'])->name('delete data2');
Route::get('/tambah_data2', [App\Http\Controllers\HalamanData2::class, 'create'])->name('tambah data2');
Route::get('/detail_map/{id}', [App\Http\Controllers\HalamanData2::class, 'show'])->name('detail map');
Route::get('/rumah-sakit', [App\Http\Controllers\RumahSakitController::class, 'index'])->name('rumah sakit');
Route::post('/rumahsakit-post', [App\Http\Controllers\RumahSakitController::class, 'store'])->name('post rumahsakit');
Route::get('/rumahsakit-delete/{id}', [App\Http\Controllers\RumahSakitController::class, 'destroy'])->name('delete rumahsakit');
Route::get('/rumahsakit-tambah', [App\Http\Controllers\RumahSakitController::class, 'create'])->name('tambah rumahsakit');
Route::get('/rumahsakit-edit/{id}', [App\Http\Controllers\RumahSakitController::class, 'edit'])->name('edit rumahsakit');
Route::post('/rumahsakit-update', [App\Http\Controllers\RumahSakitController::class, 'update'])->name('update rumahsakit');
Route::get('/home/{tematik_id?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rs/dashboard', [App\Http\Controllers\RumahSakit::class, 'index'])->name('rs dashboard');
Route::get('/rs/verif', [App\Http\Controllers\RumahSakit::class, 'verif'])->name('verif');
Route::get('/rs/verifikasi/{id}', [App\Http\Controllers\RumahSakit::class, 'verifikasi'])->name('verifikasi');
Route::get('/rs/pendaftaran-delete/{id}', [App\Http\Controllers\RumahSakit::class, 'destroy'])->name('pendaftaran hapus');
