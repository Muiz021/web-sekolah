<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MisiSekolahController;
use App\Http\Controllers\admin\VisiSekolahController;
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

Route::get('/', function () {
    return view('admin.pages.dashboard.index');
});


Route::get('/profil-kepala-sekolah',[ProfilKepalaSekolahController::class,'index']);
Route::get('/membuat-profil-kepala-sekolah',[ProfilKepalaSekolahController::class,'create']);
Route::post('/store-profil-kepala-sekolah',[ProfilKepalaSekolahController::class,'store']);
Route::get('/edit-profil-kepala-sekolah',[ProfilKepalaSekolahController::class,'edit']);
Route::post('/update-profil-kepala-sekolah',[ProfilKepalaSekolahController::class,'update']);

Route::get('/profil-sekolah',[ProfilSekolahController::class,'index']);
Route::get('/membuat-profil-sekolah',[ProfilSekolahController::class,'create']);
Route::post('/store-profil-sekolah',[ProfilSekolahController::class,'store']);
Route::get('/edit-profil-sekolah',[ProfilSekolahController::class,'edit']);
Route::post('/update-profil-sekolah',[ProfilSekolahController::class,'update']);

Route::get('/visi-sekolah',[VisiSekolahController::class,'index']);
Route::get('/membuat-visi-sekolah',[VisiSekolahController::class,'create']);
Route::post('/store-visi-sekolah',[VisiSekolahController::class,'store']);
Route::get('/edit-visi-sekolah/{id}',[VisiSekolahController::class,'edit']);
Route::post('/update-visi-sekolah/{id}',[VisiSekolahController::class,'update']);
Route::get('/delete-visi-sekolah/{id}',[VisiSekolahController::class,'delete']);

Route::get('/misi-sekolah',[MisiSekolahController::class,'index']);
Route::get('/membuat-misi-sekolah',[MisiSekolahController::class,'create']);
Route::post('/store-misi-sekolah',[MisiSekolahController::class,'store']);
Route::get('/edit-misi-sekolah/{id}',[MisiSekolahController::class,'edit']);
Route::post('/update-misi-sekolah/{id}',[MisiSekolahController::class,'update']);
Route::get('/delete-misi-sekolah/{id}',[MisiSekolahController::class,'delete']);
