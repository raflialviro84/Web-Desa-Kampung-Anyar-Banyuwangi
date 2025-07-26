<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata - Desa Kampunganyar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>

<body class="bg-[#17a286] font-sans">

    <!-- Navbar -->
    <div class="bg-green-900 text-white px-8 py-4">
        <div class="flex justify-between items-center max-w-screen-xl mx-auto">
            <div class="flex items-center gap-4">
                <img src="/gambar-icon/logo-desa.png" alt="Logo Desa" class="h-14 w-14 rounded bg-white p-1">
                <div>
                    <h1 class="font-bold text-lg">Desa Kampunganyar</h1>
                    <p class="text-sm font-normal">Kabupaten Banyuwangi</p>
                </div>
            </div>
            <nav class="flex gap-8 font-semibold text-base">
                <a href="index.php" class="nav-link">Home</a>
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

    <?php
    // Ambil ID wisata dari parameter URL
    $wisata_id = isset($_GET['id']) ? $_GET['id'] : 'jopuro';
    
    // Data wisata
    $wisata_data = [
        'jopuro' => [
            'nama' => 'Wisata Jopuro',
            'deskripsi_singkat' => 'Destinasi wisata alam yang menawarkan pemandangan indah dan udara segar.',
            'deskripsi_lengkap' => 'Wisata Jopuro merupakan destinasi wisata alam unggulan di Desa Kampung Anyar yang menawarkan pengalaman tak terlupakan bagi para pengunjung. Terletak di area yang strategis dengan pemandangan alam yang memukau, wisata ini cocok untuk berbagai aktivitas rekreasi keluarga. Udara segar pegunungan dan suasana yang tenang menjadikan tempat ini sebagai pilihan sempurna untuk melepas penat dari rutinitas sehari-hari. Pengunjung dapat menikmati keindahan alam sambil berfoto di berbagai spot menarik yang telah disediakan.',
            'gambar_utama' => '/gambar-icon/wisata-jopuro.webp',
            'galeri' => [
                '/gambar-icon/wisata-jopuro.webp',
                '/gambar-icon/foto-galeri1.jpg',
                '/gambar-icon/foto-galeri3.jpg'
            ],
            'lokasi' => 'Kampung Anyar, Desa Kampunganyar',
            'jam_operasional' => '08:00 - 17:00 WIB',
            'harga_tiket' => 'Rp 10.000 per orang',
            'fasilitas' => [
                'Area Parkir Luas',
                'Toilet Umum',
                'Warung Makan',
                'Spot Foto Instagramable',
                'Gazebo Istirahat',
                'Jalur Trekking'
            ],
            'kontak' => '086526778233'
        ],
        'hutan-pinus' => [
            'nama' => 'Hutan Pinus Kampung Anyar',
            'deskripsi_singkat' => 'Kawasan hutan pinus yang sejuk dan rindang dengan trek hiking yang menantang.',
            'deskripsi_lengkap' => 'Hutan Pinus Kampung Anyar adalah kawasan hutan pinus alami yang menawarkan pengalaman hiking dan trekking yang menantang. Dengan pepohonan pinus yang tinggi menjulang dan udara yang sejuk, tempat ini menjadi surga bagi para pecinta alam dan fotografi. Trek hiking yang tersedia cocok untuk berbagai tingkat kemampuan, mulai dari pemula hingga yang berpengalaman. Suasana hutan yang tenang dan asri memberikan kesempatan untuk bermeditasi dan menikmati keindahan alam yang masih alami.',
            'gambar_utama' => '/gambar-icon/foto-galeri3.jpg',
            'galeri' => [
                '/gambar-icon/foto-galeri3.jpg',
                '/gambar-icon/wisata-jopuro.webp',
                '/gambar-icon/foto-galeri1.jpg'
            ],
            'lokasi' => 'Area Hutan Desa, Kampung Anyar',
            'jam_operasional' => '07:00 - 18:00 WIB',
            'harga_tiket' => 'Rp 15.000 per orang',
            'fasilitas' => [
                'Jalur Trekking Bertingkat',
                'Pos Istirahat',
                'Area Camping',
                'Spot Foto Pinus',
                'Pemandu Wisata',
                'Toilet Portable'
            ],
            'kontak' => '086526778233'
        ],
        'air-terjun' => [
            'nama' => 'Air Terjun Alami',
            'deskripsi_singkat' => 'Air terjun tersembunyi di tengah hutan yang menawarkan kesegaran alami.',
            'deskripsi_lengkap' => 'Air Terjun Alami Kampung Anyar adalah permata tersembunyi yang terletak di tengah hutan lebat. Air terjun ini menawarkan pengalaman yang menyegarkan dengan air jernih yang mengalir dari ketinggian. Suara gemericik air yang menenangkan dan kolam alami di bawahnya menjadikan tempat ini sempurna untuk berenang dan relaksasi. Akses menuju air terjun memerlukan sedikit petualangan melalui jalur hutan, namun pemandangan yang disajikan sangat sepadan dengan usaha yang dikeluarkan.',
            'gambar_utama' => '/gambar-icon/foto-galeri1.jpg',
            'galeri' => [
                '/gambar-icon/foto-galeri1.jpg',
                '/gambar-icon/foto-galeri3.jpg',
                '/gambar-icon/wisata-jopuro.webp'
            ],
            'lokasi' => 'Hulu Sungai Desa, Kampung Anyar',
            'jam_operasional' => '08:00 - 16:00 WIB',
            'harga_tiket' => 'Rp 12.000 per orang',
            'fasilitas' => [
                'Kolam Renang Alami',
                'Area Piknik',
                'Gazebo Bambu',
                'Jalur Tracking',
                'Toilet Umum',
                'Warung Sederhana'
            ],
            'kontak' => '086526778233'
        ]
    ];
    
    // Ambil data wisata berdasarkan ID
    $wisata = isset($wisata_data[$wisata_id]) ? $wisata_data[$wisata_id] : $wisata_data['jopuro'];
    ?>

    <!-- Breadcrumb -->
    <div class="bg-white py-4 px-8">
        <div class="max-w-screen-xl mx-auto">
            <nav class="text-sm text-gray-600">
                <a href="index.php" class="hover:text-teal-600">Home</a>
                <span class="mx-2">></span>
                <a href="potensi-wisata-desa.php" class="hover:text-teal-600">Potensi Wisata</a>
                <span class="mx-2">></span>
                <span class="text-gray-800 font-semibold"><?php echo $wisata['nama']; ?></span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-teal-500 to-green-600 py-16">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4"><?php echo $wisata['nama']; ?></h1>
                    <p class="text-xl text-white/90 mb-6"><?php echo $wisata['deskripsi_singkat']; ?></p>
                    <div class="flex items-center text-white/80 mb-4">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span><?php echo $wisata['lokasi']; ?></span>
                    </div>
                    <div class="flex items-center text-white/80">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <span><?php echo $wisata['jam_operasional']; ?></span>
                    </div>
                </div>
                <div class="relative">
                    <img src="<?php echo $wisata['gambar_utama']; ?>" alt="<?php echo $wisata['nama']; ?>" class="w-full h-96 object-cover rounded-2xl shadow-2xl">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-4 py-2">
                        <span class="text-teal-600 font-bold text-lg"><?php echo $wisata['harga_tiket']; ?></span>
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
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang <?php echo $wisata['nama']; ?></h2>
                        <p class="text-gray-600 leading-relaxed"><?php echo $wisata['deskripsi_lengkap']; ?></p>
                    </div>

                    <!-- Galeri Foto -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Galeri Foto</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <?php foreach($wisata['galeri'] as $foto): ?>
                            <div class="relative group cursor-pointer">
                                <img src="<?php echo $foto; ?>" alt="Galeri <?php echo $wisata['nama']; ?>" class="w-full h-48 object-cover rounded-lg transition-transform duration-300 group-hover:scale-105">
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Fasilitas -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Fasilitas Tersedia</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php foreach($wisata['fasilitas'] as $fasilitas): ?>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700"><?php echo $fasilitas; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    
                    <!-- Info Wisata -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg mb-8 sticky top-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Wisata</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-teal-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-800">Lokasi</p>
                                    <p class="text-gray-600"><?php echo $wisata['lokasi']; ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-teal-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-800">Jam Operasional</p>
                                    <p class="text-gray-600"><?php echo $wisata['jam_operasional']; ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-teal-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-800">Harga Tiket</p>
                                    <p class="text-gray-600"><?php echo $wisata['harga_tiket']; ?></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-teal-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-800">Kontak</p>
                                    <p class="text-gray-600"><?php echo $wisata['kontak']; ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <a href="kontak-desa.php" class="w-full bg-gradient-to-r from-teal-500 to-green-600 text-white py-3 px-6 rounded-full font-semibold hover:from-teal-600 hover:to-green-700 transition-all duration-300 inline-flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                    
                    <!-- Wisata Lainnya -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Wisata Lainnya</h3>
                        <div class="space-y-4">
                            <?php 
                            $other_wisata = array_filter($wisata_data, function($key) use ($wisata_id) {
                                return $key !== $wisata_id;
                            }, ARRAY_FILTER_USE_KEY);
                            
                            foreach(array_slice($other_wisata, 0, 2) as $id => $data): 
                            ?>
                            <a href="detail-wisata.php?id=<?php echo $id; ?>" class="block group">
                                <div class="flex gap-3">
                                    <img src="<?php echo $data['gambar_utama']; ?>" alt="<?php echo $data['nama']; ?>" class="w-16 h-16 object-cover rounded-lg">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-800 group-hover:text-teal-600 transition-colors"><?php echo $data['nama']; ?></h4>
                                        <p class="text-sm text-gray-600 line-clamp-2"><?php echo $data['deskripsi_singkat']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <a href="potensi-wisata-desa.php" class="text-teal-600 font-semibold hover:text-teal-700 transition-colors inline-flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Lihat Semua Wisata
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-900 text-white pt-12 pb-4 px-8 mt-24">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo dan Alamat -->
            <div class="flex flex-col gap-4">
                <img src="/gambar-icon/logo-desa.png" alt="Logo Desa" class="h-20 w-20 mb-2">
                <div>
                    <h3 class="font-bold text-xl mb-2">Pemerintah Desa Kampung Anyar</h3>
                    <p class="text-base leading-relaxed">Jl. Kampung Anyar No. 1,<br>
                        Desa Kampunganyar,
                        Kecamatan Glagah,
                        Kabupaten Banyuwangi
                        Provinsi Jawa Timur, 68461</p>
                </div>
            </div>
            <!-- Kontak -->
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-xl mb-2">Hubungi Kami</h3>
                <div class="flex items-center gap-2"><span class="material-icons">call</span> 086526778233</div>
                <div class="flex items-center gap-2"><span class="material-icons">email</span> admin@kampunganyar.com</div>
                <div class="flex gap-4 mt-2">
                    <a href="#" class="text-white hover:text-green-300"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-white hover:text-green-300"><i class="fab fa-facebook text-2xl"></i></a>
                    <a href="#" class="text-white hover:text-green-300"><i class="fab fa-youtube text-2xl"></i></a>
                </div>
            </div>
            <!-- Nomor Telepon Penting -->
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-xl mb-2">Nomor Telepon Penting</h3>
                <a href="#" class="underline hover:text-green-300">Kepala Desa</a>
                <a href="#" class="underline hover:text-green-300">Sekretaris Desa</a>
            </div>
            <!-- Jelajahi -->
            <div class="flex flex-col gap-4">
                <h3 class="font-bold text-xl mb-2">Jelajahi</h3>
                <a href="#" class="underline hover:text-green-300">Website Kemendesa</a>
                <a href="#" class="underline hover:text-green-300">Website Kemendagri</a>
                <a href="#" class="underline hover:text-green-300">Cek DPT Online</a>
            </div>
        </div>
        <!-- Copyright -->
        <div class="w-full text-center text-white text-base mt-16">© 2025 Powered by PT Digital Desa Indonesia</div>
    </footer>

</body>

</html>