@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'SIPEKMA - Usulan Kegiatan')

@section('content')

 <div class="col-md-6 col-lg-12">
    <div class="card h-10">
      <div class="card-body border-bottom pb-2 row justify-content-between">
        <div class="col-sm-3">
          <h5 class="card-title py-3">Pengajuan Usulan Kegiatan</h5>
        </div>
         <div class="col-sm-3 text-end">
              <button type="button" class="btn btn- btn-outline-success   py-3 shadow-lg" onclick="window.location.href='/kegiatan/usulan?showModal=true'">
                <i class="bi bi-pen-fill"></i> Ajukan Kegiatan
              </button>
          </div>
      </div>
      {{-- datatabel untuk kegiatan --}}
     <div class="card-body pt-1">
  <div class="card">
    <h5 class="card-header py-3">Usulan Kegiatan</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Tanggal Pengajuan</th>
            <th>Nama Kegiatan</th>
            <th>Jenis Kegiatan</th>
            <th>Status Kegiatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($usulan as $item)
          <tr>
            <td>{{ $item->created_at->format('d-m-Y') }}</td>
            <td>{{ $item->nama_kegiatan }}</td>
            <td>{{ $item->jenisKegiatan->nama_jenis_kegiatan ?? '-' }}</td>
            <td>
              <span class="badge {{ $item->statusKegiatan->badgeClass() }} me-1">
                  {{ $item->statusKegiatan->deskripsi_kode ?? 'Tidak Diketahui' }}
              </span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  {{-- <a class="dropdown-item" href="{{ route('usulan.edit', $item->id) }}">
                    <i class="bx bx-edit-alt me-1"></i> Edit
                  </a> --}}
                  {{-- <form action="{{ route('usulan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')"> --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item">
                      <i class="bx bx-trash me-1"></i> Delete
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center">Belum ada usulan kegiatan</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

    </div>
  </div>


  {{-- datatabel untuk History Disposisi --}}
  <div class="col-md-6 col-lg-12 pt-5">
    <div class="card h-10">

      <div class="card-body">
        <div class="card">
          <h5 class="card-header">Riwayat Disposisi</h5>
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Tanggal Pengajuan</th>
                  <th>Nama Kegiatan</th>
                  <th>Disposisi</th>
                  <th class="text-center">Status</th> <!-- Tambahkan text-end di sini -->
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td><i class="bx bxl-angular bx-md text-danger me-4"></i> <span>Angular Project</span></td>
                  <td>Albert Cook</td>
                  <td>
                    <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                      ...
                    </ul>
                  </td>
                  <td class="text-center"><span class="badge bg-label-primary me-1">Active</span></td> <!-- Tambahkan text-end di sini -->
                </tr>
                <tr>
                  <td><i class="bx bxl-react bx-md text-info me-4"></i> <span>React Project</span></td>
                  <td>Barry Hunter</td>
                  <td>
                    <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                      ...
                    </ul>
                  </td>
                  <td class="text-center"><span class="badge bg-label-success me-1">Completed</span></td>
                </tr>
                <tr>
                  <td><i class="bx bxl-vuejs bx-md text-success me-4"></i> <span>VueJs Project</span></td>
                  <td>Trevor Baker</td>
                  <td>
                    <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                      ...
                    </ul>
                  </td>
                  <td class="text-center"><span class="badge bg-label-info me-1">Scheduled</span></td>
                </tr>
                <tr>
                  <td><i class="bx bxl-bootstrap bx-md text-primary me-4"></i> <span>Bootstrap Project</span></td>
                  <td>Jerry Milton</td>
                  <td>
                    <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                      ...
                    </ul>
                  </td>
                  <td class="text-center"><span class="badge bg-label-warning me-1">Pending</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  {{-- Modal pengajuan usulan kegiatan --}}
      <div class="col-lg-4 col-md-6">
        <div class="modal fade" id="modalUsulanKegiatan" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title " id="exampleModalLabel3">Pengajuan Usulan Kegiatan</h5>
              </div>
              <div class="modal-body pb-0">
                <div class="row">
                 <!-- Basic Layout -->
                  <div class="col-xxl">
                    <div class="card mb-6">
                      <div class="card-body py-0">
                        <form>
                          <div class="mb-2 row">
                            <label class="col-sm-3 col-form-label" for="nama-kegiatan">Nama kegiatan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama-kegiatan" placeholder="" />
                            </div>
                          </div>
                          <div class="mb-2 row">
                            <label for="html5-textarea-input" class="col-md-3 col-form-label">Deskripsi Kegiatan</label>
                            <div class="col-md-9">
                              <textarea class="form-control"
                              id="html5-textarea-input"
                              name="textarea"
                              rows="4"></textarea>
                            </div>
                          </div>
                          <div class="mb-2 row">
                            <label for="defaultSelect" class="col-md-3 col-form-label">Tipe Kegiatan</label>
                            <div class="col-md-9">
                              <select id="defaultSelect" class="form-select">
                                <option>Pilih Tipe Kegiatan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-2 row">
                            <label for="defaultSelect" class="col-md-3 col-form-label">Sumber Pendanaan</label>
                            <div class="col-md-9">
                              <select id="defaultSelect" class="form-select">
                                <option>Pilih Jenis Pendanaan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-4 row">
                            <label for="html5-textarea-input" class="col-md-3 col-form-label">Tempat Kegiatan</label>
                            <div class="col-md-9">
                              <textarea class="form-control"
                              id="html5-textarea-input"
                              name="textarea"
                              rows="4"></textarea>
                            </div>
                          </div>
                          <div class="row mb-4 ">
                            <label class="col-md-3 col-form-label">Tanggal Kegiatan</label>
                            <div class="col-md-4">
                              <div class="input-group mb-2 mb-md-0">
                                <span class="input-group-text">Mulai</span>
                                <input type="date" class="form-control" name="tanggal_mulai">
                              </div>
                            </div>
                            <div class="col-md-1"></div>
                              <div class="col-md-4  ">
                                <div class="input-group">
                                  <span class="input-group-text">Sampai</span>
                                  <input type="date" class="form-control" id="tanggal-berakhir" name="tanggal_berakhir">
                                </div>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button"
                        class="btn btn-outline-secondary me-auto"
                        data-bs-dismiss="modal"
                        id="closeModalBtn">
                  Close
                </button>
                <button type="button" class="btn btn-primary">Ajukan Kegiatan</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{-- pop up modal  --}}
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const myModalEl = document.getElementById('modalUsulanKegiatan');

          // param untuk menampilkan modal usulan kegiatan
          const urlParams = new URLSearchParams(window.location.search);
          if (urlParams.get('showModal') === 'true') {
            const myModal = new bootstrap.Modal(myModalEl);
            myModal.show();
          }

          // Event ketika modal ditutup
          myModalEl.addEventListener('hidden.bs.modal', function () {
            // Bersihkan query string menggunakan replaceState agar tidak mengganggu riwayat browser
            const newUrl = window.location.origin + window.location.pathname;
            window.history.replaceState({}, document.title, newUrl);
          });
        });
        </script>

@endsection
