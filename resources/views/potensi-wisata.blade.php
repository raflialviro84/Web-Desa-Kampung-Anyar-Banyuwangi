@extends('layouts.app')

@section('title', 'Potensi Wisata Desa Kampunganyar')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-teal-500 to-green-600 py-20">
    <div class="max-w-screen-xl mx-auto px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Potensi Wisata Desa</h1>
        <p class="text-xl text-white/90 mb-8">Jelajahi keindahan dan kekayaan wisata yang ada di Kampung Anyar</p>
        <div class="w-24 h-1 bg-white mx-auto rounded-full"></div>
    </div>
</section>

<!-- Main Content -->
<section class="bg-gray-50 py-16">
    <div class="max-w-screen-xl mx-auto px-8">

        <!-- Header Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Wisata Alam Kampung Anyar</h2>
            <p class="text-gray-600 mt-2">Nikmati keindahan alam dan udara segar di destinasi wisata alam desa kami</p>
        </div>

        <!-- Wisata Alam Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1: Wisata Jopuro -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('gambar-icon/wisata-jopuro.webp') }}" alt="Wisata Jopuro" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Wisata Jopuro</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Destinasi wisata alam yang menawarkan pemandangan indah dan udara segar. Cocok untuk rekreasi keluarga dan menikmati keindahan alam Kampung Anyar dengan suasana yang tenang dan asri.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Kampung Anyar</span>
                        </div>
                        <a href="{{ route('detail-wisata', ['id' => 'jopuro']) }}" class="text-teal-600 font-semibold hover:text-teal-700 transition-colors">Lihat Detail →</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Hutan Pinus -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('gambar-icon/foto-galeri3.jpg') }}" alt="Hutan Pinus" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Hutan Pinus Kampung Anyar</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Kawasan hutan pinus yang sejuk dan rindang, menawarkan trek hiking yang menantang dan spot foto yang instagramable dengan latar belakang pepohonan pinus yang tinggi menjulang.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Area Hutan Desa</span>
                        </div>
                        <a href="{{ route('detail-wisata', ['id' => 'hutan-pinus']) }}" class="text-teal-600 font-semibold hover:text-teal-700 transition-colors">Lihat Detail →</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Air Terjun Alami -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('gambar-icon/foto-galeri1.jpg') }}" alt="Air Terjun" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Air Terjun Alami</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Air terjun tersembunyi di tengah hutan yang menawarkan kesegaran alami. Tempat yang sempurna untuk berenang dan menikmati suara gemericik air yang menenangkan jiwa.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Hulu Sungai Desa</span>
                        </div>
                        <a href="{{ route('detail-wisata', ['id' => 'air-terjun']) }}" class="text-teal-600 font-semibold hover:text-teal-700 transition-colors">Lihat Detail →</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Call to Action -->
        <div class="mt-16 text-center">
            <div class="bg-gradient-to-r from-teal-500 to-green-600 rounded-2xl p-8 text-white">
                <h3 class="text-3xl font-bold mb-4">Tertarik Berkunjung?</h3>
                <p class="text-xl mb-6 opacity-90">Hubungi kami untuk informasi lebih lanjut tentang paket wisata dan panduan kunjungan</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('kontak') }}" class="bg-white text-teal-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Hubungi Kami
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-teal-600 transition-colors inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                        </svg>
                        Lihat Peta Lokasi
                    </a>
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
            <img src="{{ asset('gambar-icon/logo-desa.png') }}" alt="Logo Desa" class="h-20 w-20 mb-2">
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
@endsection

