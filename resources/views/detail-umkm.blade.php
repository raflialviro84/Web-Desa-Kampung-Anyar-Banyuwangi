@extends('layouts.app')

@section('title', 'Detail Produk UMKM - Desa Kampunganyar')

@section('content')
@php
// Data Produk UMKM
$umkm_data = [
    'kerajinan-bambu' => [
        'nama' => 'Kerajinan Bambu',
        'kategori' => 'Kerajinan',
        'deskripsi_singkat' => 'Produk kerajinan bambu berkualitas tinggi dengan desain tradisional dan modern yang unik.',
        'deskripsi_lengkap' => 'Kerajinan bambu Kampung Anyar merupakan produk unggulan yang dibuat oleh pengrajin lokal dengan keahlian turun temurun. Menggunakan bambu berkualitas tinggi dari hutan lokal, setiap produk dibuat dengan teknik tradisional yang dipadukan dengan desain modern. Produk yang dihasilkan meliputi furniture, dekorasi rumah, alat dapur, dan souvenir. Proses pembuatan menggunakan teknik ramah lingkungan tanpa bahan kimia berbahaya, sehingga aman dan tahan lama.',
        'gambar_utama' => '/gambar-icon/foto-produk.jpg',
        'galeri' => [
            '/gambar-icon/foto-produk.jpg',
            '/gambar-icon/foto-galeri4.jpg',
            '/gambar-icon/foto-galeri5.jpg'
        ],
        'lokasi_produksi' => 'Workshop Kerajinan Kampunganyar',
        'kapasitas_produksi' => '500 unit/bulan',
        'harga_range' => 'Rp 25.000 - Rp 2.500.000',
        'target_pasar' => 'Lokal, Regional, dan Ekspor',
        'omzet_bulanan' => 'Rp 150 Juta/bulan',
        'keunggulan' => [
            'Bahan Baku Lokal Berkualitas',
            'Teknik Tradisional Turun Temurun',
            'Desain Unik dan Inovatif',
            'Ramah Lingkungan',
            'Tahan Lama dan Kuat',
            'Harga Kompetitif'
        ],
        'produk_unggulan' => [
            'Furniture Bambu',
            'Dekorasi Rumah',
            'Alat Dapur Tradisional',
            'Souvenir Khas Desa',
            'Tas dan Keranjang',
            'Lampu Hias'
        ],
        'kontak' => '086526778233'
    ],
    'makanan-tradisional' => [
        'nama' => 'Makanan Tradisional',
        'kategori' => 'Kuliner',
        'deskripsi_singkat' => 'Aneka makanan tradisional khas desa dengan cita rasa autentik dan resep turun temurun.',
        'deskripsi_lengkap' => 'Makanan tradisional Kampung Anyar merupakan warisan kuliner yang telah dipertahankan selama puluhan tahun. Dibuat dengan resep turun temurun menggunakan bahan-bahan alami dan rempah-rempah lokal pilihan. Setiap produk memiliki cita rasa yang khas dan autentik, mulai dari camilan tradisional, makanan pokok, hingga minuman herbal. Proses pembuatan masih menggunakan cara tradisional untuk mempertahankan keaslian rasa dan kualitas produk.',
        'gambar_utama' => '/gambar-icon/foto-galeri1.jpg',
        'galeri' => [
            '/gambar-icon/foto-galeri1.jpg',
            '/gambar-icon/foto-galeri2.jpeg',
            '/gambar-icon/foto-galeri6.jpg'
        ],
        'lokasi_produksi' => 'Dapur Produksi Kampunganyar',
        'kapasitas_produksi' => '1000 porsi/hari',
        'harga_range' => 'Rp 5.000 - Rp 50.000',
        'target_pasar' => 'Wisatawan dan Masyarakat Lokal',
        'omzet_bulanan' => 'Rp 80 Juta/bulan',
        'keunggulan' => [
            'Resep Turun Temurun',
            'Bahan Alami Berkualitas',
            'Cita Rasa Autentik',
            'Higienis dan Sehat',
            'Kemasan Menarik',
            'Harga Terjangkau'
        ],
        'produk_unggulan' => [
            'Kerupuk Ikan Tradisional',
            'Dodol Khas Desa',
            'Sambal Pecel Kampung',
            'Kopi Bubuk Lokal',
            'Jamu Herbal',
            'Kue Tradisional'
        ],
        'kontak' => '086526778233'
    ],
    'tekstil-tenun' => [
        'nama' => 'Tekstil Tenun',
        'kategori' => 'Tekstil',
        'deskripsi_singkat' => 'Produk tekstil tenun tradisional dengan motif khas daerah dan kualitas benang terbaik.',
        'deskripsi_lengkap' => 'Tekstil tenun Kampung Anyar merupakan karya seni tradisional yang menggabungkan keahlian menenun dengan motif-motif khas daerah. Menggunakan benang berkualitas tinggi dan pewarna alami, setiap produk memiliki karakteristik unik dengan pola dan warna yang menarik. Proses pembuatan dilakukan secara manual menggunakan alat tenun tradisional, sehingga menghasilkan tekstil dengan kualitas premium. Produk ini tidak hanya bernilai ekonomi tinggi tetapi juga melestarikan budaya lokal.',
        'gambar_utama' => '/gambar-icon/foto-galeri3.jpg',
        'galeri' => [
            '/gambar-icon/foto-galeri3.jpg',
            '/gambar-icon/foto-galeri5.jpg',
            '/gambar-icon/foto-produk.jpg'
        ],
        'lokasi_produksi' => 'Sanggar Tenun Kampunganyar',
        'kapasitas_produksi' => '50 meter/bulan',
        'harga_range' => 'Rp 150.000 - Rp 1.500.000',
        'target_pasar' => 'Kolektor dan Pecinta Budaya',
        'omzet_bulanan' => 'Rp 120 Juta/bulan',
        'keunggulan' => [
            'Motif Khas Daerah',
            'Benang Berkualitas Premium',
            'Pewarna Alami',
            'Teknik Tenun Tradisional',
            'Desain Eksklusif',
            'Nilai Budaya Tinggi'
        ],
        'produk_unggulan' => [
            'Kain Tenun Motif Tradisional',
            'Selendang Tenun',
            'Sarung Tenun',
            'Taplak Meja Tenun',
            'Tas Tenun',
            'Aksesoris Fashion'
        ],
        'kontak' => '086526778233'
    ]
];

// Ambil ID UMKM dari parameter URL
$umkm_id = request()->get('id', 'kerajinan-bambu');

// Ambil data UMKM berdasarkan ID
$umkm = isset($umkm_data[$umkm_id]) ? $umkm_data[$umkm_id] : $umkm_data['kerajinan-bambu'];
@endphp

<!-- Breadcrumb -->
<div class="bg-white py-4 px-8">
    <div class="max-w-screen-xl mx-auto">
        <nav class="text-sm text-gray-600">
            <a href="{{ route('beranda') }}" class="hover:text-green-600">Home</a>
            <span class="mx-2">></span>
            <a href="{{ route('potensi-umkm') }}" class="hover:text-green-600">Potensi UMKM</a>
            <span class="mx-2">></span>
            <span class="text-gray-800 font-semibold">{{ $umkm['nama'] }}</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-600 to-green-800 py-16">
    <div class="max-w-screen-xl mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-4">
                    <span class="text-white font-semibold">{{ $umkm['kategori'] }}</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">{{ $umkm['nama'] }}</h1>
                <p class="text-xl text-white/90 mb-6">{{ $umkm['deskripsi_singkat'] }}</p>
                <div class="grid grid-cols-2 gap-4 text-white/80">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z"></path>
                        </svg>
                        <span class="text-sm">{{ $umkm['kapasitas_produksi'] }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm">{{ $umkm['harga_range'] }}</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="{{ $umkm['gambar_utama'] }}" alt="{{ $umkm['nama'] }}" class="w-full h-96 object-cover rounded-2xl shadow-2xl">
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-4 py-2">
                    <span class="text-green-600 font-bold text-sm">{{ $umkm['omzet_bulanan'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="bg-gray-50 py-16">
    <div class="max-w-screen-xl mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Content Column -->
            <div class="lg:col-span-2">
                
                <!-- Deskripsi Lengkap -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang {{ $umkm['nama'] }}</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $umkm['deskripsi_lengkap'] }}</p>
                </div>

                <!-- Galeri Produk -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Galeri Produk</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($umkm['galeri'] as $foto)
                        <div class="relative group cursor-pointer">
                            <img src="{{ $foto }}" alt="Galeri {{ $umkm['nama'] }}" class="w-full h-48 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Produk Unggulan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Produk Unggulan</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($umkm['produk_unggulan'] as $produk)
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">{{ $produk }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Keunggulan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Keunggulan Produk</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($umkm['keunggulan'] as $keunggulan)
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">{{ $keunggulan }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                
                <!-- Info UMKM -->
                <div class="bg-white rounded-2xl p-6 shadow-lg mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Produk</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Lokasi Produksi</p>
                                <p class="text-gray-600">{{ $umkm['lokasi_produksi'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Kapasitas Produksi</p>
                                <p class="text-gray-600">{{ $umkm['kapasitas_produksi'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Range Harga</p>
                                <p class="text-gray-600">{{ $umkm['harga_range'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Target Pasar</p>
                                <p class="text-gray-600">{{ $umkm['target_pasar'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Omzet Bulanan</p>
                                <p class="text-gray-600">{{ $umkm['omzet_bulanan'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Kontak</p>
                                <p class="text-gray-600">{{ $umkm['kontak'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="{{ route('kontak') }}" class="w-full bg-gradient-to-r from-green-600 to-green-800 text-white py-3 px-6 rounded-full font-semibold hover:from-green-700 hover:to-green-900 transition-all duration-300 inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                
                <!-- UMKM Lainnya -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Produk UMKM Lainnya</h3>
                    <div class="space-y-4">
                        @php
                        $other_umkm = array_filter($umkm_data, function($key) use ($umkm_id) {
                            return $key !== $umkm_id;
                        }, ARRAY_FILTER_USE_KEY);
                        @endphp
                        
                        @foreach(array_slice($other_umkm, 0, 2, true) as $id => $data)
                        <a href="{{ route('detail-umkm', ['id' => $id]) }}" class="block group">
                            <div class="flex gap-3">
                                <img src="{{ $data['gambar_utama'] }}" alt="{{ $data['nama'] }}" class="w-16 h-16 object-cover rounded-lg">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 group-hover:text-green-600 transition-colors">{{ $data['nama'] }}</h4>
                                    <p class="text-sm text-gray-600 line-clamp-2">{{ $data['deskripsi_singkat'] }}</p>
                                    <span class="text-xs text-green-600 font-medium">{{ $data['kategori'] }}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="{{ route('potensi-umkm') }}" class="text-green-600 font-semibold hover:text-green-700 transition-colors inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Lihat Semua Produk UMKM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection