@extends('layouts.app')

@section('title', 'Galeri')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endsection

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Galeri Desa</h1>
  <p class="text-center text-gray-500 mb-10">Kumpulan foto kegiatan dan momen terbaik desa, baik yang diupload admin maupun link eksternal.</p>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6 md:px-12">
    <!-- Foto lokal -->
    <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:scale-105 transition-transform">
      <img src="/gambar-icon/foto-galeri1.jpg" alt="Galeri 1" class="w-full h-56 object-cover" />
    </div>
    <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:scale-105 transition-transform">
      <img src="/gambar-icon/foto-galeri2.jpeg" alt="Galeri 2" class="w-full h-56 object-cover" />
    </div>
    <div class="rounded-xl overflow-hidden shadow-lg bg-white hover:scale-105 transition-transform">
      <img src="/gambar-icon/foto-galeri3.jpg" alt="Galeri 3" class="w-full h-56 object-cover" />
    </div>

    <!-- Foto eksternal -->
    <div class="rounded-xl overflow-hidden shadow-lg bg-white flex flex-col hover:scale-105 transition-transform">
      <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Kegiatan Sosialisasi Digital</h3>
          <p class="text-sm text-gray-500 mb-2">24 Juli 2025</p>
        </div>
        <a href="https://drive.google.com/your-foto-link" target="_blank" class="inline-block bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition text-center">Lihat Foto</a>
      </div>
    </div>
    <div class="rounded-xl overflow-hidden shadow-lg bg-white flex flex-col hover:scale-105 transition-transform">
      <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Kerja Bakti Bersama</h3>
          <p class="text-sm text-gray-500 mb-2">18 Juli 2025</p>
        </div>
        <a href="https://onedrive.live.com/your-foto-link" target="_blank" class="inline-block bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition text-center">Lihat Foto</a>
      </div>
    </div>
    <!-- Tambah foto lain sesuai kebutuhan -->
  </div>
</div>
@endsection