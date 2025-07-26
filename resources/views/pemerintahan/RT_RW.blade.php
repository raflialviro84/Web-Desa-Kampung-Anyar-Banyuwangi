@extends('layouts.app')

@section('title', 'RT & Tugas RT | Desa Kampung Anyar')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Side - Quality Features -->
            <div class="bg-white rounded-2xl shadow-lg p-8 relative overflow-hidden">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">RT</h1>
                    <h2 class="text-1xl font-bold text-green-700">Rukun Tetangga (RT) adalah lembaga yang dibentuk melalui musyawarah masyarakat setempat dalam rangka membantu Kepala Desa dalam bidang pelayanan pemerintahan dan kemasyarakatan yang ditetapkan oleh Pemerintahan Desa.</h2>
                </div>

                <!-- Tugas RW Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Memberikan layanan yang sesuai dengan wewenang yang ada kepada komunitas RT.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Mendorong, merawat, dan membangun harmoni di antara anggota komunitas RT serta dalam interaksi antara anggota RT dan pemerintah atau lembaga lain yang terdapat di Desa.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Membangun organisasi, perlindungan, dan kenyamanan dalam interaksi sosial di lingkungan RT.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Menjunjung tinggi nilai budaya dan norma agama, norma kesopanan, norma kesusilaan, dan norma hukum yang berlaku di dalam tatanan kehidupan berbangsa, bernegara, dan bermasyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Card -->
                <div class="bg-[#f0f8f0] rounded-xl p-4 mb-6">
                    <div class="flex items-start">
                        <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            Menerima saran sebagai referensi untuk merancang program pembangunan dengan meningkatkan harapan dan inisiatif dari masyarakat.
                        </p>
                    </div>
                </div>

                <!-- Plant Illustration -->
                <div class="absolute bottom-0 right-0 w-48 h-48 opacity-20">
                    <svg viewBox="0 0 200 200" class="w-full h-full">
                        <!-- Pot -->
                        <path d="M60 160 L140 160 L135 180 L65 180 Z" fill="#8B4513" stroke="#654321" stroke-width="2"/>
                        
                        <!-- Stems -->
                        <line x1="100" y1="160" x2="100" y2="120" stroke="#228B22" stroke-width="3"/>
                        <line x1="85" y1="155" x2="85" y2="125" stroke="#228B22" stroke-width="2"/>
                        <line x1="115" y1="155" x2="115" y2="125" stroke="#228B22" stroke-width="2"/>
                        
                        <!-- Main Flower -->
                        <ellipse cx="100" cy="110" rx="15" ry="25" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="95" cy="115" rx="12" ry="20" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="105" cy="115" rx="12" ry="20" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        
                        <!-- Side Flowers -->
                        <ellipse cx="85" cy="120" rx="8" ry="15" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="115" cy="120" rx="8" ry="15" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        
                        <!-- Leaves -->
                        <ellipse cx="75" cy="140" rx="15" ry="8" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(-30 75 140)"/>
                        <ellipse cx="125" cy="140" rx="15" ry="8" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(30 125 140)"/>
                        <ellipse cx="90" cy="135" rx="12" ry="6" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(-15 90 135)"/>
                        <ellipse cx="110" cy="135" rx="12" ry="6" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(15 110 135)"/>
                        
                        <!-- Flower Centers -->
                        <line x1="100" y1="105" x2="100" y2="115" stroke="#FFD700" stroke-width="2"/>
                        <line x1="85" y1="115" x2="85" y2="125" stroke="#FFD700" stroke-width="1"/>
                        <line x1="115" y1="115" x2="115" y2="125" stroke="#FFD700" stroke-width="1"/>
                    </svg>
                </div>
            </div>

            <!-- Right Side - Tugas RW -->
            <div class="bg-white rounded-2xl shadow-lg p-8 relative overflow-hidden">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">RW</h1>
                    <h2 class="text-1xl font-bold text-green-700">Rukun Warga (RW) adalah lembaga yang dibentuk melalui musyawarah pengurus RT di wilayah kerjanya yang ditetapkan oleh Pemerintahan Desa.</h2>
                </div>

                <!-- Tugas RT Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Menggerakkan inisiatif swadaya dan keterlibatan komunitas di daerahnya.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Mendukung kelancaran tugas LPMD dalam merancang, melaksanakan, dan mengawasi pembangunan yang melibatkan masyarakat.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Melaksanakan koordinasi dengan RT yang ada dalam wilayah RW sesuai dengan tugas dan fungsi yang diemban.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-[#f0f8f0] rounded-xl p-4">
                        <div class="flex items-start">
                            <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                            <p class="text-sm text-gray-700 leading-relaxed">
                                Menciptakan suasana tertib, aman, dan nyaman dalam kehidupan masyarakat di RW.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Card -->
                <div class="bg-[#f0f8f0] rounded-xl p-4 mb-6">
                    <div class="flex items-start">
                        <span class="block w-2 h-2 rounded-full bg-green-600 mt-2 mr-3 flex-shrink-0"></span>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            Menghargai nilai-nilai budaya, norma agama, norma kesopanan, norma etika, dan norma hukum yang berlaku dalam konteks kehidupan berbangsa, bernegara, dan bermasyarakat.
                        </p>
                    </div>
                </div>

                <!-- Plant Illustration -->
                <div class="absolute bottom-0 right-0 w-48 h-48 opacity-20">
                    <svg viewBox="0 0 200 200" class="w-full h-full">
                        <!-- Pot -->
                        <path d="M60 160 L140 160 L135 180 L65 180 Z" fill="#8B4513" stroke="#654321" stroke-width="2"/>
                        
                        <!-- Stems -->
                        <line x1="100" y1="160" x2="100" y2="120" stroke="#228B22" stroke-width="3"/>
                        <line x1="85" y1="155" x2="85" y2="125" stroke="#228B22" stroke-width="2"/>
                        <line x1="115" y1="155" x2="115" y2="125" stroke="#228B22" stroke-width="2"/>
                        
                        <!-- Main Flower -->
                        <ellipse cx="100" cy="110" rx="15" ry="25" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="95" cy="115" rx="12" ry="20" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="105" cy="115" rx="12" ry="20" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        
                        <!-- Side Flowers -->
                        <ellipse cx="85" cy="120" rx="8" ry="15" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        <ellipse cx="115" cy="120" rx="8" ry="15" fill="white" stroke="#E5E5E5" stroke-width="1"/>
                        
                        <!-- Leaves -->
                        <ellipse cx="75" cy="140" rx="15" ry="8" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(-30 75 140)"/>
                        <ellipse cx="125" cy="140" rx="15" ry="8" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(30 125 140)"/>
                        <ellipse cx="90" cy="135" rx="12" ry="6" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(-15 90 135)"/>
                        <ellipse cx="110" cy="135" rx="12" ry="6" fill="#32CD32" stroke="#228B22" stroke-width="1" transform="rotate(15 110 135)"/>
                        
                        <!-- Flower Centers -->
                        <line x1="100" y1="105" x2="100" y2="115" stroke="#FFD700" stroke-width="2"/>
                        <line x1="85" y1="115" x2="85" y2="125" stroke="#FFD700" stroke-width="1"/>
                        <line x1="115" y1="115" x2="115" y2="125" stroke="#FFD700" stroke-width="1"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
