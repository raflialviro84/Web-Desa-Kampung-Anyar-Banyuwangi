<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function profilDesa()
    {
        return view('profil-desa');
    }

    public function potensiWisata()
    {
        return view('potensi-wisata');
    }

    public function potensiSda()
    {
        return view('potensi-sda');
    }

    public function potensiUmkm()
    {
        return view('potensi-umkm');
    }

    public function detailWisata()
    {
        return view('detail-wisata');
    }

    public function detailSda()
    {
        return view('detail-sda');
    }

    public function detailUmkm()
    {
        return view('detail-umkm');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
