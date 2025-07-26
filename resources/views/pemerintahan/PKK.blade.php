@extends('layouts.app')

@section('title', 'PKK')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pemerintahan-rt-rw.css') }}">
    <style>
        .pkk-card {
            border-radius: 1.5rem;
            background: #fff;
            box-shadow: 0 4px 24px 0 rgba(18, 54, 32, 0.07);
            padding: 2.5rem 2rem;
            margin-bottom: 2rem;
            border: 2px solid #e6f4ee;
            transition: box-shadow 0.2s;
        }
        .pkk-card:hover {
            box-shadow: 0 8px 32px 0 rgba(18, 54, 32, 0.13);
            border-color: #36a474;
        }
        .pkk-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #169d61;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }
        .pkk-sub {
            color: #444;
            font-weight: 500;
            margin-bottom: 1.2rem;
            font-size: 1rem;
        }
        .pkk-list {
            padding-left: 1.4rem;
            margin-bottom: 0.4rem;
        }
        .pkk-list li {
            margin-bottom: 0.6rem;
            font-size: 1.02rem;
            color: #314350;
        }
        @media (min-width: 900px) {
            .pkk-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2.5rem;
            }
            .pkk-card {
                margin-bottom: 0;
            }
        }
        .tab-btn {
            @apply px-4 py-2 rounded-xl font-bold text-green-900 bg-green-50 shadow transition hover:bg-green-100 focus:outline-none;
        }
        .tab-btn.active {
            @apply bg-green-700 text-white shadow-lg;
        }
        .card-sub {
            @apply bg-white rounded-2xl shadow-lg p-6 mb-8;
        }
        .pkk-point {
            @apply flex gap-3 items-start mb-3;
        }
        .pkk-bullet {
            width: 11px;
            height: 11px;
            background: #20643b;
            border-radius: 50%;
            margin-top: 7px;
            flex-shrink: 0;
        }
        .pkk-point-text {
            @apply text-base md:text-lg text-gray-800;
        }
    </style>
@endsection

@section('content')
<div class="bg-rt min-h-screen py-10">
    <div class="max-w-5xl mx-auto">
        <div class="rt-card-main mb-10">
            <h1 class="rt-title text-3xl md:text-4xl">PKK</h1>
            <p class="text-lg text-gray-800 font-medium mb-4">
                <strong>Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Desa (TP PKK Desa)</strong> adalah lembaga kemasyarakatan yang merupakan mitra kerja Pemerintah Desa dan organisasi kemasyarakatan lainnya yang berfungsi sebagai fasilitator, perencana, pelaksana, pengendali, dan penggerak untuk terlaksananya program PKK.
            </p>
            <p class="text-lg text-gray-800">
                Kelompok PKK adalah kelompok-kelompok yang berada di bawah TP PKK Desa yang dapat dibentuk berdasarkan kewilayahan, baik di tingkat dusun, RW, dan RT.
            </p>
        </div>
        
        <!-- Fungsi Section -->
        <div class="max-w-7xl mx-auto py-12 px-4">
            <div class="pkk-grid">
                {{-- Card Dusun --}}
                <div class="pkk-card flex flex-col">
                    <ul class="pkk-list list-disc">
                        <li>Melaksanakan pendampingan dan memotivasi partisipasi masyarakat dalam menjalankan 10 Program Pokok PKK di level dusun.</li>
                        <li>Mempersiapkan data dan informasi berbasis dusun mengenai situasi dan perkembangan dari beragam aktivitas serta pengelolaan 10 Program Pokok PKK.</li>
                        <li>Menyampaikan beragam data, informasi, serta permasalahan kepada TP PKK desa untuk ditindaklanjuti.</li>
                        <li>Memfasilitasi gerakan serta pengembangan partisipasi, gotong royong, dan inisiatif masyarakat.</li>
                        <li>Mengembangkan aktivitas tambahan sesuai dengan kebutuhan yang ada.</li>
                        <li>Melaporkan hasil kegiatan kepada TP PKK desa dan Kepala Desa.</li>
                        <li>Pemberdayaan serta pengembangan potensi masyarakat untuk meningkatkan kesejahteraan keluarga di Dusun.</li>
                        <li>Penyuluhan dan pembinaan kepada kelompok PKK di Dusun.</li>
                        <li>Penggerak atau motivator bagi masyarakat Dusun, terutama keluarga, agar mau dan mampu merealisasikan program PKK.</li>
                        <li>Pelaksanaan, perencanaan, pengawasan, dan fasilitasi aktivitas program PKK di Dusun.</li>
                    </ul>
                </div>
                {{-- Card RW --}}
                <div class="pkk-card flex flex-col border-2 border-green-200">
                    <div class="pkk-title">PKK RW</div>
                    <ul class="pkk-list list-disc">
                        <li>Melaksanakan pendampingan serta menggerakkan partisipasi masyarakat dalam merealisasikan 10 Program Pokok PKK di tingkat RW.</li>
                        <li>Mempersiapkan data dan informasi ali berdasarkan RW tentang kondisi serta perkembangan dari berbagai kegiatan yang berhubungan dengan pengelolaan 10 Program Pokok PKK.</li>
                        <li>Menyampaikan beragam data, informasi, serta isu kepada ketua Kelompok PKK Dusun untuk dilanjutkan.</li>
                        <li>Memfasilitasi gerakan partisipasi, gotong royong, dan inisiatif masyarakat RW.</li>
                        <li>Mengembangkan kegiatan tambahan sesuai dengan kebutuhan yang muncul.</li>
                        <li>Melaporkan hasil dari kegiatan kepada Ketua Kelompok PKK Dusun dan Ketua Rukun Warga (RW).</li>
                        <li>Pemberdayaan dan peningkatan potensi masyarakat untuk meningkatkan kesejahteraan keluarga di RW.</li>
                        <li>Penyuluhan dan pembinaan untuk kelompok PKK RT.</li>
                        <li>Menjadi penggerak atau motivator bagi masyarakat RW, khususnya keluarga, agar bersedia dan mampu menjalankan program PKK.</li>
                        <li>Pelaksanaan, perencanaan, pengendalian, dan fasilitasi kegiatan program PKK di RW.</li>
                    </ul>
                </div>
                {{-- Card RT --}}
                <div class="pkk-card flex flex-col border-2 border-green-200">
                    <div class="pkk-title">PKK RT</div>
                    <ul class="pkk-list list-disc">
                        <li>Melakukan pendampingan serta menggerakkan masyarakat untuk berpartisipasi dalam penyelenggaraan 10 Program Pokok PKK di tingkat RT.</li>
                        <li>Mempersiapkan data dan informasi bertingkat Rukun Tetangga (RT) tentang situasi serta perkembangan beragam kegiatan terkait pengelolaan 10 Program Pokok PKK.</li>
                        <li>Menyampaikan informasi, data, dan isu kepada Ketua Kelompok PKK RW untuk ditindaklanjuti.</li>
                        <li>Memfasilitasi gerakan, partisipasi, gotong royong, dan inisiatif masyarakat.</li>
                        <li>Mengembangkan kegiatan lain sesuai dengan kebutuhan yang dihadapi.</li>
                        <li>Melaporkan hasil pelaksanaan kegiatan kepada Ketua Kelompok PKK RW dan Ketua RT.</li>
                        <li>Pemberdayaan dan pengembangan potensi masyarakat untuk meningkatkan kesejahteraan keluarga di RT.</li>
                        <li>Penyuluhan dan pembinaan kepada masyarakat di RT.</li>
                        <li>Menjadi penggerak atau motivator bagi masyarakat RT agar mau dan mampu melaksanakan program PKK.</li>
                        <li>Pelaksanaan, perencanaan, pengendalian, serta fasilitasi kegiatan program PKK di RT.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function showTab(tab) {
    document.getElementById('tab-tugas').style.display = (tab === 'tugas') ? '' : 'none';
    document.getElementById('tab-fungsi').style.display = (tab === 'fungsi') ? '' : 'none';
    const btns = document.querySelectorAll('.tab-btn');
    btns.forEach((btn, i) => {
        if ((tab === 'tugas' && i === 0) || (tab === 'fungsi' && i === 1)) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
}
</script>
@endsection
