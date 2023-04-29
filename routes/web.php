<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PpdbController as PpdbAdmin;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\PpdbController as PpdbUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VisiDanMisiController;
use App\Http\Controllers\Admin\BeritaSekolahController;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\ProfilKepalaSekolahController;

Route::name('front.')->group(function () {
    Route::get('/', [FrontController::class, 'home'])->name('home');
    Route::get('/guru', [FrontController::class, 'guru'])->name('guru');
    Route::get('/berita', [FrontController::class, 'berita'])->name('berita');
    Route::get('/berita-detail/{slug}', [FrontController::class, 'berita_detail'])->name('berita_detail');
    Route::get('/tentang-sekolah', [FrontController::class, 'tentang_sekolah'])->name('tentang-sekolah');
    Route::get('/visi-dan-misi-sekolah', [
        FrontController::class,
        'visi_dan_misi_sekolah',
    ])->name('visi-dan-misi-sekolah');
    Route::get('/tentang-kepala-sekolah', [
        FrontController::class,
        'tentang_kepala_sekolah',
    ])->name('tentang-kepala-sekolah');
    Route::get('ppdb', [PpdbUser::class, 'index'])->name('ppdb');
    Route::post('ppdb', [PpdbUser::class, 'store'])->name('ppdb.store');
    Route::get('view-ppdb/{id}', [PpdbUser::class, 'view'])->name('ppdb.view');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
    Route::middleware('auth')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('/profil-kepala-sekolah', ProfilKepalaSekolahController::class);
        Route::resource('/profil-sekolah', ProfilSekolahController::class);
        Route::resource('/visi-dan-misi', VisiDanMisiController::class);
        Route::resource('/berita', BeritaSekolahController::class);

        Route::resource('guru', GuruController::class);
        Route::resource('user', UserController::class);
        Route::get('ppdb/update-status', [PpdbAdmin::class, 'updateStatus'])->name('ppdb.status-update');
        Route::get('ppdb/{id}/list-siswa/{tgl_awal}/{tgl_akhir}', [
            PpdbAdmin::class,
            'listSiswa',
        ])->name('ppdb.siswa-list');
        Route::get('ppdb/{id}/list-siswa-export/{tgl_awal}/{tgl_akhir}', [
            PpdbAdmin::class,
            'export',
        ])->name('ppdb.list-siswa-export');
        Route::resource('ppdb', PpdbAdmin::class);
        Route::resource('slider', SliderController::class);
        Route::resource('galeri', GaleriController::class);

        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
