@extends('layouts.app')

@section('title', 'Potensi Sumber Daya Alam Desa Kampunganyar')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-600 to-green-800 text-white py-20 px-8">
    <div class="max-w-screen-xl mx-auto text-center">
        <h1 class="text-5xl font-bold mb-6">Potensi Sumber Daya Alam</h1>
        <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
            Jelajahi kekayaan sumber daya alam yang melimpah di Desa Kampung Anyar, dari pertanian hingga sumber daya mineral yang berkelanjutan
        </p>
        <div class="flex justify-center items-center gap-4 text-lg flex-wrap">
            <span class="bg-white/20 px-4 py-2 rounded-full">🌾 Pertanian</span>
            <span class="bg-white/20 px-4 py-2 rounded-full">🥥 Perkebunan</span>
            <span class="bg-white/20 px-4 py-2 rounded-full">🐄 Peternakan</span>
            <span class="bg-white/20 px-4 py-2 rounded-full">🐟 Perikanan</span>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="bg-white py-16 px-8">
    <div class="max-w-screen-xl mx-auto">
        <!-- Filter Kategori -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Kategori Sumber Daya Alam</h2>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button onclick="filterCategory('all')" class="category-btn active bg-green-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-700 transition-colors">
                    Semua Kategori
                </button>
                <button onclick="filterCategory('pertanian')" class="category-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-green-600 hover:text-white transition-colors">
                    🌾 Pertanian
                </button>
                <button onclick="filterCategory('perkebunan')" class="category-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-green-600 hover:text-white transition-colors">
                    🥥 Perkebunan
                </button>
                <button onclick="filterCategory('peternakan')" class="category-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-green-600 hover:text-white transition-colors">
                    🐄 Peternakan
                </button>

                <button onclick="filterCategory('perikanan')" class="category-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-green-600 hover:text-white transition-colors">
                    🐟 Perikanan
                </button>
            </div>
        </div>

        <!-- SDA Grid -->
        <div id="sda-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Pertanian -->
            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="pertanian">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri2.jpeg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Pertanian Padi</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Lahan pertanian padi seluas 300 hektar dengan sistem irigasi modern dan varietas unggul yang menghasilkan 6 ton/ha.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'pertanian-padi']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="pertanian">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri3.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Pertanian Jagung</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Budidaya jagung hibrida seluas 100 hektar dengan produktivitas tinggi untuk pakan ternak dan konsumsi.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'pertanian-jagung']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="pertanian">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri4.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Pertanian Sayuran</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Budidaya sayuran organik seperti kangkung, bayam, dan sawi seluas 50 hektar untuk pasar lokal.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'pertanian-sayuran']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Perkebunan -->
            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="perkebunan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri5.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Perkebunan Kelapa</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Perkebunan kelapa seluas 80 hektar dengan produksi kopra dan minyak kelapa untuk industri lokal.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'perkebunan-kelapa']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="perkebunan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri6.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Perkebunan Kopi</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kopi arabika dan robusta seluas 30 hektar dengan kualitas premium untuk ekspor dan konsumsi lokal.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'perkebunan-kopi']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="perkebunan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri1.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Perkebunan Cengkeh</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Tanaman cengkeh seluas 10 hektar sebagai komoditas rempah-rempah dengan nilai ekonomi tinggi.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'perkebunan-cengkeh']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Peternakan -->
            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="peternakan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri3.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Peternakan Sapi</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Peternakan sapi potong dan perah dengan 200 ekor sapi yang dikelola secara modern dan berkelanjutan.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'peternakan-sapi']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="peternakan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri2.jpeg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Peternakan Kambing</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Budidaya kambing etawa dan jawa dengan 150 ekor untuk produksi daging dan susu kambing.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'peternakan-kambing']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="peternakan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri4.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Peternakan Ayam</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Peternakan ayam kampung dan broiler dengan 5000 ekor untuk produksi telur dan daging ayam.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'peternakan-ayam']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>



            <!-- Perikanan -->
            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="perikanan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri5.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Budidaya Ikan</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kolam ikan air tawar seluas 15 hektar untuk budidaya lele, nila, dan gurame dengan sistem bioflok.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'budidaya-ikan']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="sda-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" data-category="perikanan">
                <div class="h-64 bg-cover bg-center" style="background-image: url('/gambar-icon/foto-galeri6.jpg');">
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Budidaya Udang</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Tambak udang vaname seluas 8 hektar dengan teknologi modern untuk produksi udang berkualitas ekspor.
                    </p>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('detail-sda', ['id' => 'budidaya-udang']) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik SDA -->
        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8 mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Statistik Sumber Daya Alam</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">3</div>
                    <div class="text-gray-600">Jenis Pertanian</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-yellow-600 mb-2">3</div>
                    <div class="text-gray-600">Jenis Perkebunan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 mb-2">3</div>
                    <div class="text-gray-600">Jenis Peternakan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">2</div>
                    <div class="text-gray-600">Jenis Perikanan</div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-800 rounded-2xl p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Tertarik Berkolaborasi?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Bergabunglah dalam pengembangan sektor pertanian, perkebunan, peternakan, dan perikanan Kampung Anyar yang berkelanjutan
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

<script>
function filterCategory(category) {
    // Get all SDA items
    const items = document.querySelectorAll('.sda-item');
    const buttons = document.querySelectorAll('.category-btn');
    
    // Remove active class from all buttons
    buttons.forEach(btn => {
        btn.classList.remove('active', 'bg-green-600', 'text-white');
        btn.classList.add('bg-gray-200', 'text-gray-700');
    });
    
    // Add active class to clicked button
    event.target.classList.add('active', 'bg-green-600', 'text-white');
    event.target.classList.remove('bg-gray-200', 'text-gray-700');
    
    // Show/hide items based on category
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
            item.style.animation = 'fadeIn 0.5s ease-in';
        } else {
            item.style.display = 'none';
        }
    });
}

// Add CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .sda-item {
        transition: all 0.3s ease;
    }
`;
document.head.appendChild(style);
</script>

@endsection