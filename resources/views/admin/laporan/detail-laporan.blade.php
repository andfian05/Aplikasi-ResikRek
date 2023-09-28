<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.laporan.layout.header')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    {{-- Sidebar.blade.php --}}
    @include('admin.laporan.layout.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        {{-- Navbar.blade.php --}}
        @include('admin.laporan.layout.navbar')
      </header>

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-5 text-center">Detail Laporan</h5>
              <a class="btn btn-success m-1 mb-3" href="{{ route('laporan.index') }}">
                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
              </a>
              <a class="btn btn-danger m-1 mb-3" href="">
                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
              </a>

              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="alert alert-dark text-white" role="alert">
                      (*) Hanya Melihat
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Pegawai <sup class="text-secondary" font-size="20px">*
                        </sup></label>
                      <select name="user_id" id="user_id" class="form-control" disabled>
                        <option value="{{ $report->user_id }}">{{ $report->user->nama }}</option>
                      </select>
                    </div>

                    <div class="row form-label mb-5 mt-6">
                      <div class="col-md-6">
                        <div class="form mb-5 mt-6 mb-md-0">
                          <label for="before" class="form-label text-justify">Before </label>
                          <div class="text-left">
                            <img src="{{ asset('storage/img/before/'. $report->before_foto) }}" 
                              style="height: 10rem;" class="img-circle elevation-2" alt="Image before">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 form-label">
                        <div class="form mb-5 mt-6 mb-md-0">
                          <label for="after" class="form-label text-justify">After </label>
                          <div class="text-left">
                            <img src="{{ asset('storage/img/after/'. $report->after_foto) }}" 
                              style="height: 10rem;" class="img-circle elevation-2" alt="Image after">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi <sup class="text-secondary" 
                        font-size="20px">*
                        </sup></label>
                      <textarea name="deskripsi" class="form-control" id="deskripsi" cols="6" rows="3"
                        disabled>{{ $report->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="lokasi" class="form-label">Lokasi <sup class="text-secondary"   
                        font-size="20px">*
                        </sup></label>
                      <textarea name="lokasi" class="form-control" id="lokasi" cols="6" rows="3" disabled>{{ $report->lokasi }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="catatan" class="form-label">Catatan <sup class="text-secondary" 
                        font-size="20px">*
                        </sup></label>
                      <textarea name="catatan" class="form-control" id="" cols="6" rows="3" required
                        disabled>{{ $report->catatan }}</textarea>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Footer.blade.php --}}
  @include('admin.laporan.layout.footer')


</body>

</html>