<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('sadmin.penempatan.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('sadmin.penempatan.layout.sidebar')



        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('sadmin.penempatan.layout.navbar')
            </header>


            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Detail Penempatan</h5>
                            <a class="btn btn-success m-1 mb-3" href="">
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
                                            <label for="desa" class="form-label">Kabupaten / Kota <sup class="text-secondary" font-size="20px">* </sup></label>
                                            <select name="kab_id" id="kabupaten"
                                              class="form-control" disabled>
                                              <option value="{{ $penempatan->kabupaten->id_kab }}">
                                                {{ $penempatan->kabupaten->nama }}
                                              </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan <sup class="text-secondary" font-size="20px">* </sup></label>
                                            <select name="kecn_id" id="kecamatan"
                                              class="form-control" disabled>
                                              <option value="{{ $penempatan->kecamatan->id_kec }}">
                                                {{ $penempatan->kecamatan->nama }}
                                              </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="desa" class="form-label">Kelurahan / Desa <sup class="text-secondary" font-size="20px">* </sup></label>
                                          <select name="desa_id" id="desa"
                                            class="form-control" disabled>
                                            <option value="{{ $penempatan->desa->id_desa }}">
                                              {{ $penempatan->desa->nama }}
                                            </option>
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="alamat" class="form-label">Alamat Lengkap <sup class="text-secondary" font-size="20px">* </sup></label>
                                          <textarea name="alamat" class="form-control" id="alamat" 
                                            cols="6" rows="3" disabled>
                                            {{ $penempatan->alamat }}
                                          </textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- </div> --}}








                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>


    {{-- Footer.blade.php --}}
    @include('sadmin.layout.footer')


</body>

</html>
