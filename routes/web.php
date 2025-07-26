<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-desa', [PageController::class, 'profilDesa'])->name('profil-desa');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');