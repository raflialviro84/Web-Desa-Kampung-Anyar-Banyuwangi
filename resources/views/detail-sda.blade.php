@extends('layouts.app')

@section('title', 'Detail Potensi SDA - Desa Kampunganyar')

@section('content')
@php
// Data Kelompok Tani
$kelompok_tani = [
    'mangga' => [
        'nama' => 'Kelompok Tani Mangga',
        'ketua' => 'Pak Ahmad',
        'komoditas' => ['Padi'],
        'alamat' => 'Dusun Mangga, Desa Kampunganyar',
        'kontak' => '081234567890'
    ],
    'podo-subur' => [
        'nama' => 'Kelompok Tani Podo Subur',
        'ketua' => 'Pak Samsul',
        'komoditas' => ['Padi'],
        'alamat' => 'Dusun Podo, Desa Kampunganyar',
        'kontak' => '081234567891'
    ],
    'podo-makmur' => [
        'nama' => 'Kelompok Tani Podo Makmur',
        'ketua' => 'Pak Joko',
        'komoditas' => ['Padi'],
        'alamat' => 'Dusun Podo, Desa Kampunganyar',
        'kontak' => '081234567892'
    ],
    'muara' => [
        'nama' => 'Kelompok Tani Muara',
        'ketua' => 'Pak Bambang',
        'komoditas' => ['Jagung', 'Sayuran'],
        'alamat' => 'Dusun Muara, Desa Kampunganyar',
        'kontak' => '081234567893'
    ],
    'sidomuncul' => [
        'nama' => 'Kelompok Tani Sidomuncul',
        'ketua' => 'Pak Sutrisno',
        'komoditas' => ['Jagung', 'Sayuran'],
        'alamat' => 'Dusun Sidomuncul, Desa Kampunganyar',
        'kontak' => '081234567894'
    ],
    'panggang-makmur' => [
        'nama' => 'Kelompok Tani Panggang Makmur',
        'ketua' => 'Pak Sumarno',
        'komoditas' => ['Padi','Sayuran'],
        'alamat' => 'Dusun Panggang, Desa Kampunganyar',
        'kontak' => '081234567895'
    ]
];

// Data Potensi SDA
$sda_data = [
    // PERTANIAN
    'pertanian-padi' => [
        'nama' => 'Pertanian Padi',
        'kategori' => 'Pertanian',
        'komoditas' => 'Padi',
        'deskripsi_singkat' => 'Lahan pertanian padi dengan sistem irigasi modern dan varietas unggul yang menghasilkan 6 ton/ha.',
        'deskripsi_lengkap' => 'Pertanian padi merupakan sektor unggulan di Desa Kampung Anyar dengan sistem irigasi modern yang mendukung produktivitas tinggi. Petani menggunakan varietas unggul dan teknik pertanian berkelanjutan yang ramah lingkungan. Dengan dukungan teknologi modern dan pengelolaan yang baik, hasil panen padi mencapai 6 ton per hektar, menjadikannya salah satu daerah penghasil padi terbaik di wilayah ini.',
        'gambar_utama' => '/gambar-icon/foto-galeri2.jpeg',
        'galeri' => ['/gambar-icon/foto-galeri2.jpeg', '/gambar-icon/foto-galeri4.jpg', '/gambar-icon/foto-galeri5.jpg'],
        'lokasi' => 'Area Persawahan Desa Kampunganyar',

        'potensi_ekonomi' => 'Tinggi',
        'keunggulan' => ['Sistem Irigasi Modern', 'Varietas Unggul', 'Teknik Berkelanjutan', 'Produktivitas Tinggi', 'Kualitas Premium', 'Ramah Lingkungan'],
        'kontak' => '086526778233'
    ],
    'pertanian-jagung' => [
        'nama' => 'Pertanian Jagung',
        'kategori' => 'Pertanian',
        'komoditas' => 'Jagung',
        'deskripsi_singkat' => 'Budidaya jagung hibrida dengan produktivitas tinggi untuk pakan ternak dan konsumsi.',
        'deskripsi_lengkap' => 'Budidaya jagung di Kampung Anyar menggunakan varietas hibrida unggul yang memberikan hasil optimal. Jagung yang dihasilkan memiliki kualitas tinggi dan digunakan untuk berbagai keperluan mulai dari konsumsi langsung hingga pakan ternak. Dengan teknik budidaya modern dan pemilihan bibit berkualitas, produktivitas jagung terus meningkat dan memberikan kontribusi signifikan bagi perekonomian petani.',
        'gambar_utama' => '/gambar-icon/foto-galeri3.jpg',
        'galeri' => ['/gambar-icon/foto-galeri3.jpg', '/gambar-icon/foto-galeri1.jpg', '/gambar-icon/foto-galeri6.jpg'],
        'lokasi' => 'Lahan Pertanian Kampunganyar',

        'potensi_ekonomi' => 'Baik',
        'keunggulan' => ['Varietas Hibrida', 'Produktivitas Optimal', 'Kualitas Tinggi', 'Serbaguna', 'Teknik Modern', 'Nilai Ekonomi Baik'],
        'kontak' => '086526778233'
    ],
    'pertanian-sayuran' => [
        'nama' => 'Pertanian Sayuran',
        'kategori' => 'Pertanian',
        'komoditas' => 'Sayuran',
        'deskripsi_singkat' => 'Budidaya sayuran organik seperti kangkung, bayam, dan sawi untuk pasar lokal.',
        'deskripsi_lengkap' => 'Pertanian sayuran organik di Kampung Anyar menghasilkan berbagai jenis sayuran segar seperti kangkung, bayam, sawi, dan sayuran hijau lainnya. Dengan menerapkan sistem pertanian organik, sayuran yang dihasilkan bebas dari pestisida kimia dan memiliki nilai gizi tinggi. Produk sayuran organik ini sangat diminati pasar lokal dan memberikan peluang ekonomi yang menjanjikan bagi petani.',
        'gambar_utama' => '/gambar-icon/foto-galeri4.jpg',
        'galeri' => ['/gambar-icon/foto-galeri4.jpg', '/gambar-icon/foto-galeri2.jpeg', '/gambar-icon/foto-galeri5.jpg'],
        'lokasi' => 'Kebun Sayuran Kampunganyar',

        'potensi_ekonomi' => 'Menjanjikan',
        'keunggulan' => ['Organik Alami', 'Bebas Pestisida', 'Nilai Gizi Tinggi', 'Pasar Lokal Kuat', 'Panen Kontinyu', 'Ramah Lingkungan'],
        'kontak' => '086526778233'
    ],
    
    // PERKEBUNAN
    'perkebunan-kelapa' => [
        'nama' => 'Perkebunan Kelapa',
        'kategori' => 'Perkebunan',
        'komoditas' => 'Kelapa',
        'deskripsi_singkat' => 'Perkebunan kelapa dengan produksi kopra dan minyak kelapa untuk industri lokal.',
        'deskripsi_lengkap' => 'Perkebunan kelapa di Kampung Anyar merupakan salah satu aset penting yang menghasilkan berbagai produk turunan kelapa. Dari buah kelapa yang dipanen, dihasilkan kopra berkualitas tinggi dan minyak kelapa murni yang memiliki nilai ekonomi tinggi. Pohon kelapa yang tumbuh subur di daerah ini memberikan hasil yang konsisten sepanjang tahun dan menjadi sumber pendapatan utama bagi banyak keluarga petani.',
        'gambar_utama' => '/gambar-icon/foto-galeri5.jpg',
        'galeri' => ['/gambar-icon/foto-galeri5.jpg', '/gambar-icon/foto-galeri3.jpg', '/gambar-icon/foto-galeri1.jpg'],
        'lokasi' => 'Perkebunan Kelapa Kampunganyar',

        'potensi_ekonomi' => 'Stabil',
        'keunggulan' => ['Produksi Kopra', 'Minyak Kelapa Murni', 'Hasil Konsisten', 'Nilai Ekonomi Tinggi', 'Produk Beragam', 'Pasar Stabil'],
        'kontak' => '086526778233'
    ],
    'perkebunan-kopi' => [
        'nama' => 'Perkebunan Kopi',
        'kategori' => 'Perkebunan',
        'komoditas' => 'Kopi',
        'deskripsi_singkat' => 'Kopi arabika dan robusta dengan kualitas premium untuk ekspor dan konsumsi lokal.',
        'deskripsi_lengkap' => 'Perkebunan kopi Kampung Anyar menghasilkan biji kopi arabika dan robusta berkualitas premium dengan cita rasa yang khas. Kondisi geografis dan iklim yang mendukung menghasilkan biji kopi dengan aroma dan rasa yang unik. Proses pengolahan yang dilakukan secara tradisional namun tetap memperhatikan standar kualitas modern menghasilkan kopi yang diminati baik untuk konsumsi lokal maupun ekspor.',
        'gambar_utama' => '/gambar-icon/foto-galeri6.jpg',
        'galeri' => ['/gambar-icon/foto-galeri6.jpg', '/gambar-icon/foto-galeri3.jpg', '/gambar-icon/foto-galeri4.jpg'],
        'lokasi' => 'Lereng Pegunungan Kampunganyar',

        'potensi_ekonomi' => 'Ekspor',
        'keunggulan' => ['Arabika & Robusta', 'Kualitas Premium', 'Cita Rasa Khas', 'Proses Tradisional', 'Standar Modern', 'Potensi Ekspor'],
        'kontak' => '086526778233'
    ],
    'perkebunan-cengkeh' => [
        'nama' => 'Perkebunan Cengkeh',
        'kategori' => 'Perkebunan',
        'komoditas' => 'Cengkeh',
        'deskripsi_singkat' => 'Tanaman cengkeh sebagai komoditas rempah-rempah dengan nilai ekonomi tinggi.',
        'deskripsi_lengkap' => 'Perkebunan cengkeh di Kampung Anyar menghasilkan rempah-rempah berkualitas tinggi yang memiliki nilai ekonomi sangat baik. Cengkeh yang dihasilkan memiliki aroma yang kuat dan kualitas yang memenuhi standar pasar rempah-rempah. Sebagai komoditas ekspor, cengkeh memberikan kontribusi signifikan bagi perekonomian desa dan menjadi salah satu sumber pendapatan utama petani rempah.',
        'gambar_utama' => '/gambar-icon/foto-galeri1.jpg',
        'galeri' => ['/gambar-icon/foto-galeri1.jpg', '/gambar-icon/foto-galeri5.jpg', '/gambar-icon/foto-galeri2.jpeg'],
        'lokasi' => 'Kebun Rempah Kampunganyar',

        'potensi_ekonomi' => 'Sangat Tinggi',
        'keunggulan' => ['Rempah Premium', 'Aroma Kuat', 'Kualitas Ekspor', 'Nilai Ekonomi Tinggi', 'Komoditas Strategis', 'Pasar Global'],
        'kontak' => '086526778233'
    ],
    
    // PETERNAKAN
    'peternakan-sapi' => [
        'nama' => 'Peternakan Sapi',
        'kategori' => 'Peternakan',
        'deskripsi_singkat' => 'Peternakan sapi potong dan perah yang dikelola secara modern dan berkelanjutan.',
        'deskripsi_lengkap' => 'Peternakan sapi di Kampung Anyar menerapkan sistem pengelolaan modern dengan memperhatikan kesejahteraan hewan dan keberlanjutan lingkungan. Sapi yang dipelihara meliputi sapi potong dan sapi perah yang menghasilkan daging berkualitas tinggi dan susu segar. Dengan pakan yang berkualitas dan perawatan yang baik, produktivitas ternak sapi terus meningkat dan memberikan kontribusi penting bagi pemenuhan protein hewani masyarakat.',
        'gambar_utama' => '/gambar-icon/foto-galeri3.jpg',
        'galeri' => ['/gambar-icon/foto-galeri3.jpg', '/gambar-icon/foto-galeri4.jpg', '/gambar-icon/foto-galeri6.jpg'],
        'lokasi' => 'Kandang Ternak Kampunganyar',

        'potensi_ekonomi' => 'Stabil',
        'keunggulan' => ['Pengelolaan Modern', 'Sapi Potong & Perah', 'Daging Berkualitas', 'Susu Segar', 'Pakan Berkualitas', 'Berkelanjutan'],
        'kontak' => '086526778233'
    ],
    'peternakan-kambing' => [
        'nama' => 'Peternakan Kambing',
        'kategori' => 'Peternakan',
        'deskripsi_singkat' => 'Budidaya kambing etawa dan jawa untuk produksi daging dan susu kambing.',
        'deskripsi_lengkap' => 'Peternakan kambing di Kampung Anyar mengkhususkan pada budidaya kambing etawa dan kambing jawa yang menghasilkan daging berkualitas dan susu kambing yang bergizi tinggi. Kambing etawa khususnya dikenal menghasilkan susu dengan kandungan protein tinggi yang baik untuk kesehatan. Sistem pemeliharaan yang baik dan pakan yang seimbang menghasilkan kambing yang sehat dan produktif.',
        'gambar_utama' => '/gambar-icon/foto-galeri2.jpeg',
        'galeri' => ['/gambar-icon/foto-galeri2.jpeg', '/gambar-icon/foto-galeri5.jpg', '/gambar-icon/foto-galeri1.jpg'],
        'lokasi' => 'Peternakan Kambing Kampunganyar',

        'potensi_ekonomi' => 'Menguntungkan',
        'keunggulan' => ['Kambing Etawa & Jawa', 'Daging Berkualitas', 'Susu Bergizi Tinggi', 'Protein Tinggi', 'Pemeliharaan Baik', 'Produktif'],
        'kontak' => '086526778233'
    ],
    'peternakan-ayam' => [
        'nama' => 'Peternakan Ayam',
        'kategori' => 'Peternakan',
        'deskripsi_singkat' => 'Peternakan ayam kampung dan broiler untuk produksi telur dan daging ayam.',
        'deskripsi_lengkap' => 'Peternakan ayam di Kampung Anyar mengembangkan dua jenis utama yaitu ayam kampung dan ayam broiler. Ayam kampung menghasilkan telur dan daging dengan cita rasa khas dan nilai gizi tinggi, sementara ayam broiler memberikan produksi daging yang efisien. Dengan sistem kandang yang baik dan manajemen pakan yang tepat, peternakan ayam ini mampu memenuhi kebutuhan protein hewani masyarakat lokal.',
        'gambar_utama' => '/gambar-icon/foto-galeri4.jpg',
        'galeri' => ['/gambar-icon/foto-galeri4.jpg', '/gambar-icon/foto-galeri6.jpg', '/gambar-icon/foto-galeri3.jpg'],
        'lokasi' => 'Kandang Ayam Kampunganyar',

        'potensi_ekonomi' => 'Baik',
        'keunggulan' => ['Ayam Kampung & Broiler', 'Telur Berkualitas', 'Daging Segar', 'Cita Rasa Khas', 'Nilai Gizi Tinggi', 'Produksi Efisien'],
        'kontak' => '086526778233'
    ],
    
    // PERIKANAN
    'budidaya-ikan' => [
        'nama' => 'Budidaya Ikan',
        'kategori' => 'Perikanan',
        'deskripsi_singkat' => 'Kolam ikan air tawar untuk budidaya lele, nila, dan gurame dengan sistem bioflok.',
        'deskripsi_lengkap' => 'Budidaya ikan air tawar di Kampung Anyar menggunakan sistem bioflok yang ramah lingkungan dan efisien. Jenis ikan yang dibudidayakan meliputi lele, nila, dan gurame yang memiliki nilai ekonomi tinggi dan permintaan pasar yang stabil. Sistem bioflok memungkinkan pemanfaatan air secara optimal dan menghasilkan ikan dengan kualitas yang baik serta pertumbuhan yang cepat.',
        'gambar_utama' => '/gambar-icon/foto-galeri5.jpg',
        'galeri' => ['/gambar-icon/foto-galeri5.jpg', '/gambar-icon/foto-galeri2.jpeg', '/gambar-icon/foto-galeri4.jpg'],
        'lokasi' => 'Kolam Ikan Kampunganyar',

        'potensi_ekonomi' => 'Stabil',
        'keunggulan' => ['Sistem Bioflok', 'Lele, Nila, Gurame', 'Ramah Lingkungan', 'Pertumbuhan Cepat', 'Kualitas Baik', 'Pasar Stabil'],
        'kontak' => '086526778233'
    ],
    'budidaya-udang' => [
        'nama' => 'Budidaya Udang',
        'kategori' => 'Perikanan',
        'deskripsi_singkat' => 'Tambak udang vaname dengan teknologi modern untuk produksi udang berkualitas ekspor.',
        'deskripsi_lengkap' => 'Budidaya udang vaname di Kampung Anyar menerapkan teknologi modern dengan sistem tambak yang terkontrol. Udang vaname yang dihasilkan memiliki kualitas ekspor dengan ukuran dan rasa yang sesuai standar internasional. Dengan manajemen air yang baik dan pakan berkualitas, produktivitas tambak udang terus meningkat dan memberikan nilai ekonomi yang tinggi bagi pembudidaya.',
        'gambar_utama' => '/gambar-icon/foto-galeri6.jpg',
        'galeri' => ['/gambar-icon/foto-galeri6.jpg', '/gambar-icon/foto-galeri1.jpg', '/gambar-icon/foto-galeri3.jpg'],
        'lokasi' => 'Tambak Udang Kampunganyar',

        'potensi_ekonomi' => 'Sangat Tinggi',
        'keunggulan' => ['Udang Vaname', 'Teknologi Modern', 'Kualitas Ekspor', 'Standar Internasional', 'Manajemen Terkontrol', 'Nilai Ekonomi Tinggi'],
        'kontak' => '086526778233'
    ]
];

// Ambil ID SDA dari parameter URL
$sda_id = request()->get('id', 'pertanian-padi');

// Ambil data SDA berdasarkan ID
$sda = isset($sda_data[$sda_id]) ? $sda_data[$sda_id] : $sda_data['pertanian-padi'];
@endphp

<!-- Breadcrumb -->
<div class="bg-white py-4 px-8">
    <div class="max-w-screen-xl mx-auto">
        <nav class="text-sm text-gray-600">
            <a href="{{ route('beranda') }}" class="hover:text-green-600">Home</a>
            <span class="mx-2">></span>
            <a href="{{ route('potensi-sda') }}" class="hover:text-green-600">Potensi SDA</a>
            <span class="mx-2">></span>
            <span class="text-gray-800 font-semibold">{{ $sda['nama'] }}</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-500 to-emerald-600 py-16">
    <div class="max-w-screen-xl mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-4">
                    <span class="text-white font-semibold">{{ $sda['kategori'] }}</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">{{ $sda['nama'] }}</h1>
                <p class="text-xl text-white/90 mb-6">{{ $sda['deskripsi_singkat'] }}</p>

            </div>
            <div class="relative">
                <img src="{{ $sda['gambar_utama'] }}" alt="{{ $sda['nama'] }}" class="w-full h-96 object-cover rounded-2xl shadow-2xl">
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
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang {{ $sda['nama'] }}</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $sda['deskripsi_lengkap'] }}</p>
                </div>

                <!-- Galeri Foto -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Galeri Dokumentasi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($sda['galeri'] as $foto)
                        <div class="relative group cursor-pointer">
                            <img src="{{ $foto }}" alt="Galeri {{ $sda['nama'] }}" class="w-full h-48 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Keunggulan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Keunggulan & Potensi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($sda['keunggulan'] as $keunggulan)
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">{{ $keunggulan }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Kelompok Tani Section - Hanya untuk Pertanian dan Perkebunan -->
                @if(in_array($sda['kategori'], ['Pertanian', 'Perkebunan']))
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Kelompok Tani</h2>
                    <p class="text-gray-600 mb-6">Berikut adalah daftar kelompok tani yang menjalankan kegiatan {{ strtolower($sda['komoditas']) }} di Desa Kampung Anyar:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                        // Filter kelompok tani berdasarkan komoditas SDA yang sedang dilihat
                        $kelompok_tani_filtered = array_filter($kelompok_tani, function($kelompok) use ($sda) {
                            return in_array($sda['komoditas'], $kelompok['komoditas']);
                        });
                        @endphp
                        
                        @foreach($kelompok_tani_filtered as $id => $kelompok)
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-800">{{ $kelompok['nama'] }}</h3>
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">Ketua: <span class="font-semibold">{{ $kelompok['ketua'] }}</span></span>
                                </div>
                                
                                
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">Komoditas: <span class="font-semibold">{{ implode(', ', $kelompok['komoditas']) }}</span></span>
                                </div>
                                
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">{{ $kelompok['alamat'] }}</span>
                                </div>
                                
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">{{ $kelompok['kontak'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                
                <!-- Info SDA -->
                <div class="bg-white rounded-2xl p-6 shadow-lg mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Detail</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Lokasi</p>
                                <p class="text-gray-600">{{ $sda['lokasi'] }}</p>
                            </div>
                        </div>
                        

                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Potensi Ekonomi</p>
                                <p class="text-gray-600">{{ $sda['potensi_ekonomi'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-800">Kontak</p>
                                <p class="text-gray-600">{{ $sda['kontak'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="{{ route('kontak') }}" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 px-6 rounded-full font-semibold hover:from-green-600 hover:to-emerald-700 transition-all duration-300 inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                
                <!-- SDA Lainnya -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Potensi SDA Lainnya</h3>
                    <div class="space-y-4">
                        @php
                        $other_sda = array_filter($sda_data, function($key) use ($sda_id) {
                            return $key !== $sda_id;
                        }, ARRAY_FILTER_USE_KEY);
                        @endphp
                        
                        @foreach(array_slice($other_sda, 0, 2, true) as $id => $data)
                        <a href="{{ route('detail-sda', ['id' => $id]) }}" class="block group">
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
                        <a href="{{ route('potensi-sda') }}" class="text-green-600 font-semibold hover:text-green-700 transition-colors inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Lihat Semua Potensi SDA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection