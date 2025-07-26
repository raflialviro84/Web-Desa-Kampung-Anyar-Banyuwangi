@extends('layouts.app')

@section('title', 'Beranda')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endsection

@section('content')

<!-- Main Content -->
<div class="container mx-auto py-16">
    <div class="flex flex-col md:flex-row items-start justify-between max-w-screen-xl mx-auto py-16">
        <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-green-800 mb-2">JELAJAHI DESA</h2>
            <p class="text-lg text-black font-normal leading-relaxed">
                Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa, dan juga berita tentang desa.
            </p>
        </div>
        <div class="md:w-1/2 flex justify-end">
            <div class="grid grid-cols-2 gap-8 mt-8 md:mt-0">
                <div class="bg-white rounded-lg shadow p-10 flex flex-col items-center cursor-pointer hover:shadow-xl transition">
                    <img src="/gambar-icon/profil-desa.svg" class="w-24 mb-6">
                    <p class="font-semibold text-gray-700 text-lg">PROFIL DESA</p>
                </div>
                <div class="bg-white rounded-lg shadow p-10 flex flex-col items-center cursor-pointer hover:shadow-xl transition">
                    <img src="/gambar-icon/infografis.svg" class="w-24 mb-6">
                    <p class="font-semibold text-gray-700 text-lg">INFOGRAFIS</p>
                </div>
                <div class="bg-white rounded-lg shadow p-10 flex flex-col items-center cursor-pointer hover:shadow-xl transition">
                    <img src="/gambar-icon/idm.svg" class="w-24 mb-6">
                    <p class="font-semibold text-gray-700 text-lg">IDM</p>
                </div>
                <div class="bg-white rounded-lg shadow p-10 flex flex-col items-center cursor-pointer hover:shadow-xl transition">
                    <img src="/gambar-icon/ppid.svg" class="w-24 mb-6">
                    <p class="font-semibold text-gray-700 text-lg">PPID</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sambutan Kepala Desa -->
<section class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center gap-12 pt-0">
    <div class="flex-shrink-0 flex justify-center w-full md:w-auto">
        <div class="bg-white rounded-full shadow-lg flex items-center justify-center" style="width: 340px; height: 340px;">
            <img src="/gambar-icon/kepala-desa.png" alt="Kepala Desa" class="object-cover rounded-full w-[300px] h-[300px]">
        </div>
    </div>
    <div class="flex-1">
        <h2 class="text-5xl font-bold text-green-800 mb-4">Sambutan Kepala Desa</h2>
        <div class="mb-2">
            <span class="text-2xl font-bold text-black">Nama Lengkap Kades, Gelar</span><br>
            <span class="font-semibold text-black">Kepala Desa Kampung Anyar</span>
        </div>
        <p class="text-lg text-black font-normal leading-relaxed mt-4">
            Selamat datang di Website resmi Pemerintah Desa Kampung Anyar, Kecamatan Glagah, Kabupaten Banyuwangi. Kami berharap dengan hadirnya website ini dapat menunjang keselarasan program kerja Pemerintah Desa Kampung Anyar dengan masyarakat. Selain itu website ini juga merupakan wujud dari transparansi Pemerintah Desa Kampung Anyar dalam mempublikasikan dan menginformasikan kegiatan Pemerintah Desa.
        </p>
    </div>
</section>

<!-- Section PETA DESA -->
<section class="max-w-screen-xl mx-auto py-16">
    <h2 class="text-5xl font-bold text-green-800 mb-2">PETA DESA Kampung Anyar</h2>
    <p class="text-xl text-black mb-6">Menampilkan Peta Desa Dengan <span class="italic">Interest Point</span> Desa Kampung Anyar</p>
    <div class="flex flex-col md:flex-row gap-4 mb-8">
        <div class="flex items-center gap-2">
            <input type="text" placeholder="Telusuri Peta" class="border rounded-lg px-4 py-2 w-64 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
            <button class="bg-white border rounded-lg px-3 py-2 text-gray-500 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                </svg>
            </button>
        </div>
        <select class="border rounded-lg px-4 py-2 w-64 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>Lihat Semua</option>
            <option>Fasilitas Umum</option>
            <option>Wisata</option>
            <option>Pemerintahan</option>
        </select>
    </div>
    <div id="map" class="w-full h-[500px] rounded-xl shadow" style="min-height:400px;"></div>
</section>

<!-- Section Struktur Organisasi dan Tata Kerja Desa -->
<section class="max-w-screen-xl mx-auto py-16">
    <h2 class="text-5xl font-bold text-green-800 mb-2">Struktur Organisasi & Tata Kerja Desa</h2>
    <p class="text-xl text-black mb-8">Berikut adalah struktur organisasi dan tata kerja Pemerintah Desa Kampung Anyar.</p>
    <div class="bg-white rounded-xl shadow p-8 flex flex-col">
        <!-- Bagian deskripsi: satu kolom -->
        <div class="flex flex-col items-start">
            <div class="mt-8 w-full max-w-3xl">
                <h3 class="text-2xl font-bold text-green-700 mb-2">Kepala Desa</h3>
                <ul class="list-disc ml-6 text-lg text-black text-justify">
                    <li>Memimpin penyelenggaraan pemerintahan desa</li>
                    <li>Mengkoordinasikan perangkat desa</li>
                    <li>Mengawasi pelaksanaan kebijakan desa</li>
                </ul>
            </div>
            <div class="mt-8 w-full max-w-3xl">
                <h3 class="text-2xl font-bold text-green-700 mb-2">Perangkat Desa</h3>
                <ul class="list-disc ml-6 text-lg text-black text-justify">
                    <li>Sekretaris Desa</li>
                    <li>Kepala Urusan (Keuangan, Umum, Perencanaan)</li>
                    <li>Kepala Seksi (Pemerintahan, Kesejahteraan, Pelayanan)</li>
                    <li>Kepala Dusun</li>
                </ul>
            </div>
            <div class="mt-8 w-full max-w-3xl">
                <h3 class="text-2xl font-bold text-green-700 mb-2">Tata Kerja</h3>
                <ul class="list-disc ml-6 text-lg text-black text-justify">
                    <li>Setiap perangkat desa melaksanakan tugas sesuai bidangnya</li>
                    <li>Koordinasi dilakukan secara berkala untuk kelancaran pemerintahan</li>
                    <li>Pelaporan dan evaluasi dilakukan secara transparan dan akuntabel</li>
                </ul>
            </div>
        </div>
        <!-- Kotak Struktur Perangkat Desa: satu kolom -->
        <div class="mt-12 w-full">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="rounded-xl overflow-hidden shadow border bg-white flex flex-col items-center">
                    <img src="/gambar-icon/foto-orang.jpg" class="w-full h-64 object-cover">
                    <div class="bg-green-700 w-full text-center py-4">
                        <h4 class="text-white font-bold text-xl">NAMA LENGKAP</h4>
                        <p class="text-white text-base">Kepala Desa</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow border bg-white flex flex-col items-center">
                    <img src="/gambar-icon/foto-orang.jpg" class="w-full h-64 object-cover">
                    <div class="bg-green-700 w-full text-center py-4">
                        <h4 class="text-white font-bold text-xl">NAMA LENGKAP</h4>
                        <p class="text-white text-base">Sekretaris Desa</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow border bg-white flex flex-col items-center">
                    <img src="/gambar-icon/foto-orang.jpg" class="w-full h-64 object-cover">
                    <div class="bg-green-700 w-full text-center py-4">
                        <h4 class="text-white font-bold text-xl">NAMA LENGKAP</h4>
                        <p class="text-white text-base">Kasi Pemerintahan</p>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow border bg-white flex flex-col items-center">
                    <img src="/gambar-icon/foto-orang.jpg" class="w-full h-64 object-cover">
                    <div class="bg-green-700 w-full text-center py-4">
                        <h4 class="text-white font-bold text-xl">NAMA LENGKAP</h4>
                        <p class="text-white text-base">Kasi Kesejahteraan</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tombol Lihat Struktur Lebih Lengkap -->
        <div class="flex justify-end mt-8">
            <a href="#" class="flex items-center gap-2 text-black font-bold text-lg hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
                </svg>
                LIHAT STRUKTUR LEBIH LENGKAP
            </a>
        </div>
    </div>
</section>

<!-- Section Administrasi Penduduk -->
<section class="max-w-screen-xl mx-auto py-16">
    <h2 class="text-5xl font-bold text-green-800 mb-2">Administrasi Penduduk</h2>
    <p class="text-xl text-black mb-8">Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan pendayagunaannya untuk pelayanan publik yang efektif dan efisien</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col gap-6">
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">5.602</span>
                <span class="text-gray-800 font-bold text-2xl">Penduduk</span>
            </div>
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">1.470</span>
                <span class="text-gray-800 font-bold text-2xl">Kepala Keluarga</span>
            </div>
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">83</span>
                <span class="text-gray-800 font-bold text-2xl">Penduduk Sementara</span>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">2.772</span>
                <span class="text-gray-800 font-bold text-2xl">Laki-Laki</span>
            </div>
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">2.830</span>
                <span class="text-gray-800 font-bold text-2xl">Perempuan</span>
            </div>
            <div class="bg-gradient-to-r from-green-700 to-green-400 rounded-lg shadow flex items-center justify-between px-8 py-6">
                <span class="text-white font-bold text-4xl">214</span>
                <span class="text-gray-800 font-bold text-2xl">Mutasi Penduduk</span>
            </div>
        </div>
    </div>
</section>

<!-- Section APB DESA 2025 -->
<section class="max-w-screen-xl mx-auto py-16 flex flex-col md:flex-row items-center gap-8">
    <div class="md:w-1/2 flex justify-center">
        <img src="/gambar-icon/icon-statistik.png" alt="APB Desa Ilustrasi" class="w-[380px] md:w-[420px]">
    </div>
    <div class="md:w-1/2 flex flex-col items-start">
        <h2 class="text-4xl md:text-5xl font-bold text-green-800 mb-2">APB DESA 2025</h2>
        <p class="text-lg text-black mb-6">Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan</p>
        <div class="flex flex-col gap-4 w-full">
            <div class="bg-white rounded-lg shadow px-8 py-6 flex flex-col md:flex-row items-center justify-between w-full">
                <span class="font-semibold text-gray-500 text-lg">Pendapatan Desa</span>
                <span class="font-bold text-gray-700 text-3xl md:text-4xl">Rp2.182.664.504,00</span>
            </div>
            <div class="bg-white rounded-lg shadow px-8 py-6 flex flex-col md:flex-row items-center justify-between w-full">
                <span class="font-semibold text-gray-500 text-lg">Belanja Desa</span>
                <span class="font-bold text-gray-700 text-3xl md:text-4xl">Rp2.283.793.581,00</span>
            </div>
        </div>
        <div class="w-full flex justify-center mt-8">
            <a href="#" class="flex items-center gap-2 text-black font-bold text-lg hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
                </svg>
                LIHAT DATA LEBIH LENGKAP
            </a>
        </div>
    </div>
</section>

<!-- Section Berita Desa Terbaru -->
<section class="max-w-screen-xl mx-auto py-16">
    <h2 class="text-5xl font-bold text-green-800 mb-2">Berita Desa</h2>
    <p class="text-xl text-gray-700 mb-8">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Kampung Anyar</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        {{-- ... semua card berita, copy dari HTML-mu ... --}}
        <!-- Gunakan kode card berita dari HTML kamu di sini -->
    </div>
    <div class="flex justify-end items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
            <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
            <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
            <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
        </svg>
        <a href="#" class="text-black font-bold text-lg hover:underline">LIHAT BERITA LEBIH BANYAK</a>
    </div>
</section>

<!-- Section Wisata Desa -->
{{-- ...copy section wisata desa kamu di sini... --}}

<!-- Section Pusat Belanja (E-Commerce) Desa -->
{{-- ...copy section pusat belanja kamu di sini... --}}

<!-- Leaflet JS & Script -->
@section('js')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-8.1753695, 114.2844501], 14); // Koordinat Desa Kampung Anyar
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);
            L.marker([-8.1753695, 114.2844501]).addTo(map);
        });
    </script>
@endsection

<!-- Section Galeri Desa -->
{{-- ...copy section galeri kamu di sini... --}}

@endsection
