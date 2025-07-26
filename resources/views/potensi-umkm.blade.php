@extends('layouts.app')

@section('title', 'Potensi Produk UMKM Desa Kampunganyar')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-600 to-green-800 text-white py-20 px-8">
    <div class="max-w-screen-xl mx-auto text-center">
        <h1 class="text-5xl font-bold mb-6">Produk UMKM Kampung Anyar</h1>
        <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
            Temukan berbagai produk unggulan dari usaha mikro, kecil, dan menengah yang dikembangkan oleh masyarakat Desa Kampung Anyar
        </p>
        <div class="flex justify-center items-center gap-4 text-lg">
            <span class="bg-white/20 px-4 py-2 rounded-full">🏪 UMKM Lokal</span>
            <span class="bg-white/20 px-4 py-2 rounded-full">🌱 Produk Organik</span>
            <span class="bg-white/20 px-4 py-2 rounded-full">🎨 Kerajinan Tangan</span>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="bg-white py-16 px-8">
    <div class="max-w-screen-xl mx-auto">
        <!-- Produk UMKM Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Produk 1: Kerajinan Bambu -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri1.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Kerajinan Bambu</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Produk kerajinan bambu berkualitas tinggi seperti anyaman, furniture, dan dekorasi rumah yang ramah lingkungan.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 25.000</span>
                        <a href="{{ route('detail-umkm', ['id' => 'kerajinan-bambu']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produk 2: Makanan Olahan -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri2.jpeg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Makanan Olahan</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Berbagai makanan tradisional dan modern seperti keripik, dodol, dan camilan sehat dari bahan lokal.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 15.000</span>
                        <a href="{{ route('detail-umkm', ['id' => 'makanan-tradisional']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produk 3: Tekstil & Fashion -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri3.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Tekstil & Fashion</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Produk fashion dan tekstil seperti batik, tenun, tas, dan aksesoris dengan desain modern dan tradisional.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 50.000</span>
                        <a href="{{ route('detail-umkm', ['id' => 'tekstil-tenun']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produk 4: Produk Pertanian -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri4.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Produk Pertanian</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Hasil pertanian segar dan olahan seperti beras organik, sayuran hidroponik, dan produk herbal.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 20.000</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produk 5: Furniture Kayu -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri5.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Furniture Kayu</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Furniture kayu berkualitas tinggi seperti meja, kursi, lemari, dan dekorasi rumah dengan desain custom.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 200.000</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produk 6: Produk Digital -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri6.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Jasa Digital</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Layanan digital seperti desain grafis, website, fotografi, dan pemasaran online untuk mendukung UMKM lokal.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">Mulai Rp 100.000</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-2xl p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Tertarik Berkolaborasi?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan komunitas UMKM Kampung Anyar dan kembangkan usaha Anda bersama kami
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
</main>
@endsection