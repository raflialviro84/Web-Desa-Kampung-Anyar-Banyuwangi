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

    public function kontak()
    {
        return view('kontak');
    }
}
