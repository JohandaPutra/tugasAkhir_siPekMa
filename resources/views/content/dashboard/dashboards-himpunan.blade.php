@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
{{-- konten welcome --}}
<div class="row mb-4">
  <div class="col-xxl-12 mb-6 order-0">
    <div class="card h-100 position-relative">
      <div class="d-flex align-items-start row">
        <div class="col">
          <div class="card-body position-relative">
            <h5 class="card-title text-primary mb-3"> Ajukan Kegiatanmu Sekarang!</h5>
            <p class="mb-6">
             Ingin mengusulkan aktivitas baru? Klik di bawah ini untuk memulai prosesnya.
            </p>
            <div class="text-start my-4">
              <button type="button" class="btn btn- btn-outline-success  mx-5 py-3 shadow-lg" onclick="window.location.href='/kegiatan/usulan?showModal=true'">
                <i class="bi bi-pen-fill"></i> Ajukan Kegiatan
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-6">
            <img src="{{ asset('assets/img/illustrations/man-with-laptop.png') }}"
                 class="img-fluid img-thumbnail float-end ms-3"
                 style="max-width: 180px;"
                 alt="View Badge User">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- info dasboard kegiatan --}}
<div class="row row-cols-2 row-cols-md-4 g-4">
  <!-- Card 1 -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body position-relative text-center">
        <div class="mb-3">
          <img src="{{ asset('assets/img/icons/unicons/usulan-new.png') }}"
               class="img-fluid img-thumbnail mx-auto d-block"
               style="max-width: 60px;"
               alt="Usulan Kegiatan">
        </div>
        <h4 class="card-title mb-0">Usulan Kegiatan</h4>
        <a href="/kegiatan/usulan" class="stretched-link" aria-label="Usulan Kegiatan"></a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body position-relative text-center">
        <div class="mb-3">
          <img src="{{ asset('assets/img/icons/unicons/proposal-new.png') }}"
               class="img-fluid img-thumbnail mx-auto d-block"
               style="max-width: 60px;"
               alt="Proposal Kegiatan">
        </div>
        <h4 class="card-title mb-0">Proposal Kegiatan</h4>
        <a href="/kegiatan/proposal" class="stretched-link" aria-label="Proposal Kegiatan"></a>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body position-relative text-center">
        <div class="mb-3">
          <img src="{{ asset('assets/img/icons/unicons/pendanaan-new.png') }}"
               class="img-fluid img-thumbnail mx-auto d-block"
               style="max-width: 60px;"
               alt="Pendanaan Kegiatan">
        </div>
        <h4 class="card-title mb-0">Pendanaan Kegiatan</h4>
        <a href="/kegiatan/pendanaan" class="stretched-link" aria-label="Pendanaan Kegiatan"></a>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body position-relative text-center">
        <div class="mb-3">
          <img src="{{ asset('assets/img/icons/unicons/laporan-new.png') }}"
               class="img-fluid img-thumbnail mx-auto d-block"
               style="max-width: 60px;"
               alt="Laporan Kegiatan">
        </div>
        <h4 class="card-title mb-0">Laporan Kegiatan</h4>
        <a href="/kegiatan/laporan" class="stretched-link" aria-label="Laporan Kegiatan"></a>
      </div>
    </div>
  </div>
</div>

@endsection
