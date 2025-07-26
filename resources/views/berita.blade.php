@extends('layouts.app')

@section('title', 'Berita')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet" />
@endsection

@section('content')

<!-- Hero / Header -->
<header class="bg-light py-4 mb-4 border-bottom">
  <div class="container text-center">
    <h1 class="fw-bold" id="berita-terkini">Berita Terkini</h1>
    <p class="text-muted" id="kabar-informasi">Kabar dan Informasi dari Pemerintah Desa</p>
  </div>
</header>

<!-- Konten Utama -->
<div class="container mb-5">
  <div class="row g-4 justify-content-center">
    <!-- Berita Utama -->
    <div class="col-md-10">
      <div class="row g-4">
        <!-- Card Berita -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 1" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Peresmian Balai Desa Baru</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 23 Juli 2025</p>
              <p class="card-text mb-3">Balai desa diresmikan oleh kepala desa dengan harapan meningkatkan pelayanan masyarakat.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Berita lainnya -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 2" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Gotong Royong Mingguan</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 20 Juli 2025</p>
              <p class="card-text mb-3">Warga antusias mengikuti kegiatan gotong royong untuk membersihkan lingkungan.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Berita lainnya -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 2" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Gotong Royong Mingguan</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 20 Juli 2025</p>
              <p class="card-text mb-3">Warga antusias mengikuti kegiatan gotong royong untuk membersihkan lingkungan.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Berita lainnya -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 2" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Gotong Royong Mingguan</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 20 Juli 2025</p>
              <p class="card-text mb-3">Warga antusias mengikuti kegiatan gotong royong untuk membersihkan lingkungan.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

                <!-- Berita lainnya -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 2" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Gotong Royong Mingguan</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 20 Juli 2025</p>
              <p class="card-text mb-3">Warga antusias mengikuti kegiatan gotong royong untuk membersihkan lingkungan.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

                <!-- Berita lainnya -->
        <div class="col-md-4">
          <div class="card berita-card h-100">
            <div style="position:relative;">
              <img src="\gambar-icon\foto-berita.jpg" class="card-img-top berita-thumbnail" alt="Berita 2" />
            </div>
            <div class="card-body py-3 px-3">
              <h5 class="card-title mb-2 fw-bold">Gotong Royong Mingguan</h5>
              <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 20 Juli 2025</p>
              <p class="card-text mb-3">Warga antusias mengikuti kegiatan gotong royong untuk membersihkan lingkungan.</p>
              <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Pagination Berita">
          <ul class="pagination">
            <li class="page-item disabled"><span class="page-link">&lt;</span></li>
            <li class="page-item active"><span class="page-link bg-danger border-danger text-white">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item disabled"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
          </ul>
        </nav>
      </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection

