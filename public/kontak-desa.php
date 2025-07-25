<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa Kampunganyar</title>
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
                <h1 class="font-bold text-lg">Desa Kampung Anyar</h1>
                <p class="text-sm font-normal">Kabupaten Banyuwangi</p>
            </div>
        </div>
        <nav class="flex gap-8 font-semibold text-base">
            <a href="index.php" class="nav-link active">Home</a>
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


<!-- Section Hubungi Kami -->
<section class="max-w-screen-md mx-auto bg-white rounded-lg shadow-lg p-8 mt-12 mb-16">
    <h2 class="text-2xl font-bold text-green-900 mb-6">Hubungi Kami</h2>
    <div class="space-y-4 text-base text-gray-800">
        <div>
            <span class="font-semibold">Alamat:</span> Jl. Kampung Anyar No. 1, Desa Kampunganyar, Kecamatan Glagah, Kabupaten Banyuwangi, Provinsi Jawa Timur, 68461
        </div>
        <div>
            <span class="font-semibold">E-mail:</span> <a href="mailto:admin@kampunganyar.com" class="text-green-700 underline">admin@kampunganyar.com</a>
        </div>
        <div>
            <span class="font-semibold">Nomor Telepon:</span> <a href="tel:086526778233" class="text-green-700 underline">086526778233</a>
        </div>
    </div>
</section>

<!-- Section Form Kritik, Saran, dan Pengaduan -->
<section class="max-w-screen-md mx-auto bg-white rounded-lg shadow-lg p-8 mb-16">
    <h2 class="text-2xl font-bold text-green-900 mb-6">Kritik, Saran, dan Pengaduan</h2>
    <form action="#" method="post" class="space-y-6">
        <div>
            <label for="nama" class="block font-semibold mb-1">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
        </div>
        <div>
            <label for="email" class="block font-semibold mb-1">E-mail</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
        </div>
        <div>
            <label for="pesan" class="block font-semibold mb-1">Pesan / Kritik / Saran</label>
            <textarea id="pesan" name="pesan" rows="5" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
        </div>
        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold px-6 py-2 rounded transition">Kirim</button>
    </form>
</section>

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

<!-- Leaflet.js CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var map = L.map('map').setView([-5.265, 119.495], 13); // Ganti koordinat sesuai lokasi desa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);
        L.marker([-5.265, 119.495]).addTo(map)
            .bindPopup('Desa Pakatto')
            .openPopup();
        // Untuk polygon batas desa, tambahkan L.polygon([...]) jika ada data koordinat
    });
</script>

</body>
</html>
