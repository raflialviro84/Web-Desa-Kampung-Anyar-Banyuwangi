<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-desa', [PageController::class, 'profilDesa'])->name('profil-desa');
Route::get('/pemerintahan-RT-RW', function () {return view('pemerintahan.RT_RW');})->name('pemerintahan-RT-RW');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
