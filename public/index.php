<?php

<<<<<<< HEAD
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
=======
<!-- Navbar -->
<div class="bg-green-900 text-white px-8 py-4">
    <div class="flex justify-between items-center max-w-screen-xl mx-auto">
        <div class="flex items-center gap-4">
            <img src="/gambar-icon/logo-desa.png" alt="Logo Desa" class="h-14 w-14 rounded bg-white p-1">
            <div>
                <h1 class="font-bold text-lg">Desa Kampung Anyar</h1>
                <p class="text-sm font-normal">Kabupaten Banyuwangi</p>
            </div>
        </div>
        <nav class="flex gap-8 font-semibold text-base">
            <a href="index.php" class="nav-link active">Home</a>
            <a href="profil-desa.php" class="nav-link">Profil Desa</a>
            <a href="#" class="nav-link">Informasi</a>
            <a href="#" class="nav-link">Pemerintahan</a>
            <a href="#" class="nav-link">Potensi</a>
            <a href="#" class="nav-link">Publikasi</a>
            <a href="#" class="nav-link">Produk Hukum</a>
            <a href="kontak-desa.php" class="nav-link">Kontak</a>
        </nav>
    </div>
</div>
>>>>>>> d40ab7b50d3877ea1671713884e190087c744910

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
