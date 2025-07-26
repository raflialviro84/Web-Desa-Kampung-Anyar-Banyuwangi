<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Potensi Sumber Daya Alam Desa Kampunganyar</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>

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
                        <a href="#" class="nav-link active">Potensi</a>
                        <a href="#" class="nav-link">Publikasi</a>
                        <a href="#" class="nav-link">Produk Hukum</a>
                        <a href="kontak-desa.php" class="nav-link">Kontak</a>
                    </nav>
                </div>
            </div>

            <!-- Hero Section -->
            <section class="bg-gradient-to-br from-emerald-600 to-green-800 text-white py-20 px-8">
                <div class="max-w-screen-xl mx-auto text-center">
                    <h1 class="text-5xl font-bold mb-6">Potensi Sumber Daya Alam</h1>
                    <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                        Jelajahi kekayaan sumber daya alam yang melimpah di Desa Kampung Anyar, dari pertanian hingga sumber daya mineral yang berkelanjutan
                    </p>
                    <div class="flex justify-center items-center gap-4 text-lg">
                        <span class="bg-white/20 px-4 py-2 rounded-full">🌱 Pertanian</span>
                        <span class="bg-white/20 px-4 py-2 rounded-full">💧 Air Bersih</span>
                        <span class="bg-white/20 px-4 py-2 rounded-full">🌳 Hutan</span>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <main class="bg-white py-16 px-8">
                <div class="max-w-screen-xl mx-auto">
                    <!-- SDA Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                        <!-- SDA 1: Pertanian -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-64 bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center">
                                <span class="text-6xl">🌾</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Pertanian</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    Lahan pertanian subur seluas 450 hektar yang menghasilkan padi, jagung, dan berbagai tanaman pangan berkualitas tinggi.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-semibold">450 Ha</span>
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- SDA 2: Perkebunan -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-64 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                                <span class="text-6xl">🥥</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Perkebunan</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    Perkebunan kelapa, kopi, dan cengkeh yang memberikan hasil ekonomi berkelanjutan bagi masyarakat desa.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-semibold">120 Ha</span>
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- SDA 3: Peternakan -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-64 bg-gradient-to-br from-amber-400 to-orange-600 flex items-center justify-center">
                                <span class="text-6xl">🐄</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Peternakan</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    Peternakan sapi, kambing, dan unggas yang dikelola secara modern untuk memenuhi kebutuhan protein hewani.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-semibold">75 Ha</span>
                                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistik SDA -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8 mb-16">
                        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Statistik Sumber Daya Alam</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-green-600 mb-2">450</div>
                                <div class="text-gray-600">Lahan Pertanian (Ha)</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-yellow-600 mb-2">120</div>
                                <div class="text-gray-600">Lahan Perkebunan (Ha)</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-orange-600 mb-2">75</div>
                                <div class="text-gray-600">Lahan Peternakan (Ha)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="bg-gradient-to-r from-emerald-600 to-green-800 rounded-2xl p-12 text-center text-white">
                        <h2 class="text-3xl font-bold mb-4">Tertarik Berkolaborasi?</h2>
                        <p class="text-xl mb-8 max-w-2xl mx-auto">
                            Bergabunglah dalam pengembangan sektor pertanian, perkebunan, dan peternakan Kampung Anyar yang berkelanjutan
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Pelajari Lebih Lanjut
                            </button>
                            <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                                Hubungi Tim SDA
                            </button>
                        </div>
                    </div>
                </div>
            </main>

            
            <!-- Footer Baru -->
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