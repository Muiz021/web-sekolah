<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\VisiDanMisiController;
use App\Http\Controllers\admin\BeritaSekolahController;
use App\Http\Controllers\admin\ProfilSekolahController;
use App\Http\Controllers\admin\ProfilKepalaSekolahController;

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

Route::name('front.')->group(
    function () {
        Route::get('/', [FrontController::class, 'home'])->name('home');
        Route::get('/guru', [FrontController::class, 'guru'])->name('guru');
        Route::get('/berita', [FrontController::class, 'berita'])->name('berita');
        Route::get('/berita-detail/{slug}', [FrontController::class, 'berita_detail']);
    }
);

Route::prefix('admin')->group(
    function () {

    Route::get('/profil-kepala-sekolah', [ProfilKepalaSekolahController::class, 'index']);
    Route::get('/membuat-profil-kepala-sekolah', [ProfilKepalaSekolahController::class, 'create']);
    Route::post('/store-profil-kepala-sekolah', [ProfilKepalaSekolahController::class, 'store']);
    Route::get('/edit-profil-kepala-sekolah', [ProfilKepalaSekolahController::class, 'edit']);
    Route::post('/update-profil-kepala-sekolah', [ProfilKepalaSekolahController::class, 'update']);

    Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index']);
    Route::get('/membuat-profil-sekolah', [ProfilSekolahController::class, 'create']);
    Route::post('/store-profil-sekolah', [ProfilSekolahController::class, 'store']);
    Route::get('/edit-profil-sekolah', [ProfilSekolahController::class, 'edit']);
    Route::post('/update-profil-sekolah', [ProfilSekolahController::class, 'update']);

    Route::resource('/visi-dan-misi',VisiDanMisiController::class);
    Route::resource('/berita',BeritaSekolahController::class);

    Route::resource('guru', GuruController::class);
    Route::resource('user', UserController::class);
});
