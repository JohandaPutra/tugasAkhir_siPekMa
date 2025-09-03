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
<div class="row mb-6">
  <div class="col-xxl-8 mb-6 order-0">
    <div class="card h-100 position-relative">
      <div class="d-flex align-items-start row">
        <div class="col-sm-7">
          <div class="card-body position-relative">
            <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>
            <p class="mb-6">
              You have done 72% more sales today.<br>
              Check your new badge in your profile.
            </p>
            <a href="/badges" class="btn btn-sm btn-outline-primary">View Badges</a>
            <!-- stretched link agar seluruh card bisa diklik -->
            <a href="/badges" class="stretched-link"></a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-6">
            <img src="{{ asset('assets/img/illustrations/man-with-laptop.png') }}"
                 class="img-fluid img-thumbnail"
                 style="max-width: 180px;"
                 alt="View Badge User">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Baris Kedua (Kode 2 dengan 4 kartu) -->
<div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between mb-4">
          <div>
            <a href="#">
              <img src="{{ asset('assets/img/icons/unicons/image.png') }}"
                   class="img-fluid img-thumbnail"
                   style="max-width: 100px;"
                   alt="usulan-kegiatan">
            </a>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded text-muted"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="javascript:void(0);">View More</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
            </ul>
          </div>
        </div>
        <p class="mb-1">Sales</p>
        <h4 class="card-title mb-3">$4,679</h4>
        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
        <a href="/sales" class="stretched-link"></a>
      </div>
    </div>
  </div>

  <!-- Kartu ke-3 (contoh tambahan, bisa diganti sesuai kebutuhan) -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body">
        <!-- Konten dan gambar mirip struktur di atas -->
        <p class="mb-1">Metric 3</p>
        <h4 class="card-title mb-3">$2,000</h4>
        <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -5.20%</small>
        <a href="/metric3" class="stretched-link"></a>
      </div>
    </div>
  </div>

  <!-- Kartu ke-4 (contoh tambahan) -->
  <div class="col">
    <div class="card h-100 position-relative">
      <div class="card-body">
        <!-- Konten dan gambar mirip struktur di atas -->
        <p class="mb-1">Metric 4</p>
        <h4 class="card-title mb-3">$9,123</h4>
        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +12.30%</small>
        <a href="/metric4" class="stretched-link"></a>
      </div>
    </div>
  </div>
</div>

@endsection
