<div class="bg-green-900 text-white px-8 py-4">
    <div class="flex justify-between items-center max-w-screen-xl mx-auto">
        <div class="flex items-center gap-4">
            <img src="/gambar-icon/logo-desa.png" alt="Logo Desa" class="h-14 w-12 rounded bg-white p-1">
            <div>
                <h1 class="font-bold text-lg">Desa Kampung Anyar</h1>
                <p class="text-sm font-normal">Kabupaten Banyuwangi</p>
            </div>
        </div>
        <nav class="flex gap-8 font-semibold text-base items-center">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

            <a href="{{ url('/profil-desa') }}" class="nav-link {{ request()->is('profil-desa') ? 'active' : '' }}">Profil Desa</a>

            {{-- Informasi --}}
            <div class="relative group">
                <button class="nav-link flex items-center gap-1 focus:outline-none">
                    Informasi
                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-green-900 mt-2 rounded shadow-lg min-w-[180px] z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">APBDesa</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Data Statistik</a>
                </div>
            </div>

            {{-- Pemerintahan --}}
            <div class="relative group">
                <button class="nav-link flex items-center gap-1 focus:outline-none">
                    Pemerintahan
                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-green-900 mt-2 rounded shadow-lg min-w-[180px] z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">RT & RW</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">PKK</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Karang Taruna</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">BPD</a>
                </div>
            </div>

            {{-- Produk Hukum --}}
            <div class="relative group">
                <button class="nav-link flex items-center gap-1 focus:outline-none">
                    Produk Hukum
                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-green-900 mt-2 rounded shadow-lg min-w-[220px] z-50">
                    <a href="https://jdih.banyuwangikab.go.id/perdes" class="block px-4 py-2 hover:bg-green-100">Peraturan Desa</a>
                    <a href="https://jdih.banyuwangikab.go.id/perkades" class="block px-4 py-2 hover:bg-green-100">Peraturan Kepala Desa</a>
                    <a href="https://jdih.banyuwangikab.go.id/kepkades" class="block px-4 py-2 hover:bg-green-100">Keputusan Kepala Desa</a>
                    <a href="https://jdih.banyuwangikab.go.id/surat_edaran_kades" class="block px-4 py-2 hover:bg-green-100">Surat Edaran Kepala Desa</a>
                    <a href="https://jdih.banyuwangikab.go.id/raperdes" class="block px-4 py-2 hover:bg-green-100">Rancangan Peraturan Desa</a>
                </div>
            </div>

            {{-- Potensi --}}
            <div class="relative group">
                <button class="nav-link flex items-center gap-1 focus:outline-none">
                    Potensi
                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-green-900 mt-2 rounded shadow-lg min-w-[200px] z-50">
                    <a href="potensi-sda.php" class="block px-4 py-2 hover:bg-green-100">Sumber Daya Alam</a>
                    <a href="potensi-wisata-desa.php" class="block px-4 py-2 hover:bg-green-100">Wisata</a>
                    <a href="potensi-produk-umkm.php" class="block px-4 py-2 hover:bg-green-100">Produk Hasil UMKM</a>
                </div>
            </div>

                        {{-- Publikasi --}}
            <div class="relative group">
                <button class="nav-link flex items-center gap-1 focus:outline-none">
                    Publikasi
                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-green-900 mt-2 rounded shadow-lg min-w-[180px] z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Artikel dan Berita</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Galeri</a>
                </div>
</div>

            <a href="{{ route('kontak') }}" class="nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
        </nav>
    </div>
</div>
