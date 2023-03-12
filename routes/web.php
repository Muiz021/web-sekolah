<?php

use App\Http\Controllers\PpdbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\VisiDanMisiController;
use App\Http\Controllers\admin\BeritaSekolahController;
use App\Http\Controllers\admin\ProfilSekolahController;
use App\Http\Controllers\admin\ProfilKepalaSekolahController;


Route::name('front.')->group(
    function () {
        Route::get('/', [FrontController::class, 'home'])->name('home');
        Route::get('/guru', [FrontController::class, 'guru'])->name('guru');
        Route::get('/berita', [FrontController::class, 'berita'])->name('berita');
        Route::get('/berita-detail/{slug}', [FrontController::class, 'berita_detail'])->name('berita_detail');
        Route::get('/tentang-sekolah', [FrontController::class, 'tentang_sekolah'])->name('tentang-sekolah');
        Route::get('/visi-dan-misi-sekolah', [FrontController::class, 'visi_dan_misi_sekolah'])->name('visi-dan-misi-sekolah');
        Route::get('/tentang-kepala-sekolah', [FrontController::class, 'tentang_kepala_sekolah'])->name('tentang-kepala-sekolah');
        Route::get('ppdb',[PpdbController::class,'index'])->name('ppdb');
        Route::post('ppdb',[PpdbController::class,'store'])->name('ppdb.store');
        Route::get('view-ppdb/{id}',[PpdbController::class,'view'])->name('ppdb.view');
    }
);

Route::prefix('admin')->group(
    function () {

        Route::resource('/profil-kepala-sekolah', ProfilKepalaSekolahController::class);
        Route::resource('/profil-sekolah', ProfilSekolahController::class);
        Route::resource('/visi-dan-misi', VisiDanMisiController::class);
        Route::resource('/berita', BeritaSekolahController::class);

        Route::resource('guru', GuruController::class);
        Route::resource('user', UserController::class);
    });

    // Route::get('kartu-ppdb', function(){
    //     return view('front.pages.ppdb.kartu-ppdb');
    // });
