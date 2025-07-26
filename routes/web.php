<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-desa', [PageController::class, 'profilDesa'])->name('profil-desa');

Route::get('/potensi-wisata', [PageController::class, 'potensiWisata'])->name('potensi-wisata');
Route::get('/potensi-sda', [PageController::class, 'potensiSda'])->name('potensi-sda');
Route::get('/potensi-umkm', [PageController::class, 'potensiUmkm'])->name('potensi-umkm');
Route::get('/detail-wisata', [PageController::class, 'detailWisata'])->name('detail-wisata');
Route::get('/detail-sda', [PageController::class, 'detailSda'])->name('detail-sda');
Route::get('/detail-umkm', [PageController::class, 'detailUmkm'])->name('detail-umkm');
Route::get('/pemerintahan-RT-RW', function () {return view('pemerintahan.RT_RW');})->name('pemerintahan-RT-RW');
Route::get('/pemerintahan-PKK', function () {return view('pemerintahan.PKK');})->name('pemerintahan-PKK');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');