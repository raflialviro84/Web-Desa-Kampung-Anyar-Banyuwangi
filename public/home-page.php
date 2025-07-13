<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kampung Anyar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>
<body class="bg-gray-50 font-sans">

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
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">Profil Desa</a>
            <a href="#" class="nav-link">Infografis</a>
            <a href="#" class="nav-link">Wisata</a>
            <a href="#" class="nav-link">Berita</a>
            <a href="#" class="nav-link">Belanja</a>
            <a href="#" class="nav-link">PPID</a>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto py-16">
    <div class="flex flex-col md:flex-row items-start justify-between max-w-screen-xl mx-auto py-16">
        <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-green-800 mb-2">JELAJAHI DESA</h2>
            <p class="text-lg text-black font-normal leading-relaxed">Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa, dan juga berita tentang desa.</p>
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
            <button class="bg-white border rounded-lg px-3 py-2 text-gray-500 hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" /></svg></button>
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
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="Rembuk Stunting" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Rembuk Stunting 2025 di Desa Kampung Anyar</h3>
                    <p class="text-gray-600 text-sm mb-4">Rembuk Stunting 2025 di Desa Kampung Anyar, Menetapkan Strategi Pencegahan Stunting Pada tanggal 3 Juli 2025...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Sudirman</span>
                        <span>• Dilihat 11 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">07 Jul 2025</span>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="BPS Canangkan Desa Statistik" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">BPS Canangkan Desa Kampung Anyar sebagai Desa Cinta Statistik</h3>
                    <p class="text-gray-600 text-sm mb-4">Badan Pusat Statistik Kabupaten Banyuwangi Canangkan Desa Kampung Anyar sebagai Desa Cinta Statistik Pada tanggal 19 Juni 2025...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Basir SE</span>
                        <span>• Dilihat 92 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">05 Jun 2025</span>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="Gotong Royong" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Gotong Royong Perbaiki Akses Jalan Pemakaman</h3>
                    <p class="text-gray-600 text-sm mb-4">Gotong Royong Perbaiki Akses Jalan Pemakaman Dusun Lantebung Desa Kampung Anyar Pada tanggal 10 Juni 2025...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Sudirman</span>
                        <span>• Dilihat 60 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">02 Jun 2025</span>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="Transparansi APBDes 2024" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Transparansi Realisasi APBDes 2024</h3>
                    <p class="text-gray-600 text-sm mb-4">Transparansi Realisasi APBDes 2024 Pemerintah Desa Kampung Anyar, pada tanggal 3 Januari 2025...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Sudirman</span>
                        <span>• Dilihat 39 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">28 May 2025</span>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="Transparansi APBDes 2024" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Transparansi APBDes 2024 Desa Kampung Anyar</h3>
                    <p class="text-gray-600 text-sm mb-4">Desa Kampung Anyar Publikasi Pemaparan Anggaran 2024 pada tanggal 3 Januari 2025...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Sudirman</span>
                        <span>• Dilihat 52 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">28 May 2025</span>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
            <img src="/gambar-icon/foto-berita.jpg" alt="Musyawarah Desa" class="h-48 w-full object-cover">
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Musyawarah Desa: Pembentukan Koperasi "Merah Putih"</h3>
                    <p class="text-gray-600 text-sm mb-4">Musyawarah Desa: Pembentukan Koperasi Desa Merah Putih pada tanggal 3 Mei 2025, bertempat di Aula Desa Kampung Anyar...</p>
                </div>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <span class="font-semibold">Sudirman</span>
                        <span>• Dilihat 168 kali</span>
                    </div>
                    <span class="bg-green-600 text-white rounded-lg px-3 py-1 font-bold text-sm">06 May 2025</span>
                </div>
            </div>
        </div>
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
<section class="max-w-screen-xl mx-auto py-16">
    <div class="bg-green-700 rounded-3xl shadow-xl px-6 py-10">
        <h2 class="text-5xl font-bold text-white mb-2 drop-shadow-lg text-center">WISATA DESA</h2>
        <p class="text-2xl text-white mb-8 drop-shadow text-center">Tempat Wisata Rekreasi yang nyaman, sendiri oke, bersama banyak orang juga oke</p>
        <div class="relative flex justify-center items-center" style="min-height: 340px;">
            <button id="wisataLeft" class="absolute left-2 md:left-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-green-800 rounded-full p-2 shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg></button>
            <div id="wisataCarousel" class="w-full flex justify-center items-center">
                <!-- Card akan diisi oleh JS -->
            </div>
            <button id="wisataRight" class="absolute right-2 md:right-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-green-800 rounded-full p-2 shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></button>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wisataData = [
                {
                    img: 'gambar-icon/wisata-jopuro.webp',
                    alt: 'Air Terjun Jagir',
                    title: 'Wisata Air Terjun Jagir',
                    desc: 'Wisata alam air terjun yang indah dan segar, cocok untuk wisata keluarga dan pecinta alam.'
                },
                {
                    img: 'gambar-icon/wisata-jopuro.webp',
                    alt: 'Wisata Jopuro',
                    title: 'Wisata Jopuro',
                    desc: 'Destinasi wisata edukasi dan budaya, menawarkan pengalaman unik di Desa Kampung Anyar.'
                },
                {
                    img: 'gambar-icon/wisata-jopuro.webp',
                    alt: 'Air Terjun Kalibendo',
                    title: 'Wisata Air Terjun Kalibendo',
                    desc: 'Air terjun eksotis dengan suasana alami, cocok untuk relaksasi dan fotografi.'
                }
            ];
            let idx = 0;
            const carousel = document.getElementById('wisataCarousel');
            function renderCard(i, direction = null) {
                const w = wisataData[i];
                const card = document.createElement('div');
                card.className = 'w-full max-w-4xl bg-white rounded-3xl shadow-2xl flex flex-col items-center p-10 mx-auto card-anim';
                card.style.transition = 'transform 0.4s cubic-bezier(.4,0,.2,1), opacity 0.4s';
                card.style.opacity = '1';
                card.style.position = 'relative';
                card.style.zIndex = '1';
                card.innerHTML = `
                    <img src='${w.img}' alt='${w.alt}' class='h-64 w-full object-cover rounded-xl mb-6'>
                    <h3 class='text-3xl md:text-4xl font-bold text-green-800 mb-4 text-center'>${w.title}</h3>
                    <p class='text-lg text-gray-600 text-center'>${w.desc}</p>
                `;
                // Animasi masuk
                if (direction === 'right') {
                    card.style.transform = 'translateX(100%)';
                } else if (direction === 'left') {
                    card.style.transform = 'translateX(-100%)';
                } else {
                    card.style.transform = 'translateX(0)';
                }
                // Hapus card lama dengan animasi keluar
                const oldCard = carousel.querySelector('.card-anim');
                if (oldCard) {
                    oldCard.style.transition = 'transform 0.4s cubic-bezier(.4,0,.2,1), opacity 0.4s';
                    oldCard.style.opacity = '0';
                    oldCard.style.position = 'absolute';
                    oldCard.style.zIndex = '0';
                    if (direction === 'right') {
                        oldCard.style.transform = 'translateX(-100%)';
                    } else if (direction === 'left') {
                        oldCard.style.transform = 'translateX(100%)';
                    } else {
                        oldCard.style.transform = 'translateX(0)';
                    }
                    setTimeout(() => {
                        if (oldCard.parentNode) oldCard.parentNode.removeChild(oldCard);
                    }, 400);
                }
                carousel.appendChild(card);
                setTimeout(() => {
                    card.style.transform = 'translateX(0)';
                }, 10);
            }
            renderCard(idx);
            document.getElementById('wisataLeft').addEventListener('click', function() {
                const prevIdx = (idx - 1 + wisataData.length) % wisataData.length;
                renderCard(prevIdx, 'left');
                idx = prevIdx;
            });
            document.getElementById('wisataRight').addEventListener('click', function() {
                const nextIdx = (idx + 1) % wisataData.length;
                renderCard(nextIdx, 'right');
                idx = nextIdx;
            });
        });
        </script>
        <div class="flex justify-end items-center gap-2 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
            </svg>
            <a href="#" class="text-white font-bold text-lg hover:underline">LIHAT WISATA LEBIH BANYAK</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scroll = document.getElementById('wisataScroll');
            document.getElementById('wisataLeft').onclick = function() {
                scroll.scrollBy({ left: -350, behavior: 'smooth' });
            };
            document.getElementById('wisataRight').onclick = function() {
                scroll.scrollBy({ left: 350, behavior: 'smooth' });
            };
        });
    </script>
</section>

<!-- Section Pusat Belanja (E-Commerce) Desa -->
<section class="max-w-screen-xl mx-auto py-16">
    <div class="bg-white rounded-3xl shadow-xl px-8 py-12">
        <h2 class="text-5xl font-bold text-green-800 mb-2 drop-shadow-lg text-center">BELI DARI DESA</h2>
        <p class="text-xl text-gray-700 mb-8 text-center">Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <!-- Produk Card -->
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Nasi Bebek</h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp5.000</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Nasi Ayam</h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp15.000</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Nasi Goreng</h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp1.500</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Jagung</h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp5.000</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Sawi</h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp10.000</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow-md overflow-hidden flex flex-col">
                <img src="/gambar-icon/foto-produk.jpg" alt="" class="h-40 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Tomat
                        </h3>
                        <div class="flex items-center mb-2">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-green-700 font-bold">Rp10.000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center gap-2 mt-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
            </svg>
            <a href="#" class="font-bold text-lg text-green-800 hover:underline">LIHAT PRODUK LEBIH BANYAK</a>
        </div>
    </div>
</section>



<!-- Leaflet JS & CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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

<!-- Section Galeri Desa -->

<section class="max-w-screen-xl mx-auto py-16">
    <div class="bg-green-700 rounded-3xl shadow-xl px-8 py-12">
        <h2 class="text-5xl font-bold text-white mb-2 drop-shadow-lg text-left">GALERI DESA</h2>
        <p class="text-xl text-white mb-8 text-left">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 bg-white-700 ">
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri1.jpg" alt="Kegiatan Desa 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri2.jpeg" alt="Kegiatan Desa 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri3.jpg" alt="Kegiatan Desa 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri4.jpg" alt="Kegiatan Desa 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri5.jpg" alt="Kegiatan Desa 5" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="bg-white rounded-2xl shadow-lg w-full h-64 flex items-center justify-center overflow-hidden">
                <img src="gambar-icon/foto-galeri6.jpg" alt="Kegiatan Desa 6" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
        </div>
        <div class="flex justify-end items-center gap-2 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <rect x="4" y="4" width="16" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="8" x2="16" y2="8" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                <line x1="8" y1="16" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
            </svg>
                    img: 'gambar-icon/wisata-jopuro.webp',
        </div>
    </div>
</section>

<!-- Footer -->
                    img: 'gambar-icon/wisata-jopuro.webp',
    <div class="max-w-screen-xl mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Logo & Address -->
        <div class="flex flex-col gap-4">
            <img src="{{ asset('gambar-icon/logo-desa.png') }}" alt="Logo" class="h-20 w-20 mb-2">
            <h3 class="font-bold text-lg">Pemerintah Desa Kampung Anyar</h3>
                    img: 'gambar-icon/wisata-jopuro.webp',
                Desa Kampunganyar,<br>
                Kecamatan Glagah,<br>
                Kabupaten Banyuwangi<br>
                Provinsi Jawa Timur, 68461
            </p>
        </div>
        <!-- Kontak -->

        <!-- Nomor Telepon Penting -->

        <!-- Jelajahi -->

    </div>
    <!-- Copyright -->
    <div class="w-full text-center text-white text-base mt-24 md:mt-16">© 2025 Powered by KKN Team - PMM Kemdiktisiantek - UPN Veteran Jawa Timur</div>
</footer>

</body>
</html>
