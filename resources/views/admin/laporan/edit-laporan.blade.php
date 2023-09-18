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


                            <h5 class="card-title fw-semibold mb-5 text-center">Edit Laporan</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="/laporan">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                            </a>

                            <div class="card">
                              <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <div class="alert alert-info" role="alert">
                                    (*) Hanya Opsional 
                                  </div>
                                  <div class="mb-3">
                                    <label for="nama" class="form-label">Nama <sup class="text-primary" font-size="20px">* </sup></label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                    
                                  </div>
                                  <div class="mb-3">
                                    <label for="before" class="form-label">Before <sup class="text-primary" font-size="20px">* </sup></label>
                                    <input type="file" name="before" class="form-control" id="before">
                                    
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label for="after" class="form-label">After <sup class="text-primary" font-size="20px">* </sup></label>
                                    <input type="file" name="after" class="form-control" id="after">
                                  </div>
                                  
                                  
            
                                  <div class="mb-3">
                                    <label for="desc" class="form-label">Deskripsi <sup class="text-primary" font-size="20px">* </sup></label>
                                    <textarea name="desc" class="form-control" id="" cols="6" rows="3"
                                            required></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="lokasi" class="form-label">Lokasi <sup class="text-primary" font-size="20px">* </sup></label>
                                    <textarea name="lokasi" class="form-control" id="" cols="6" rows="3"
                                            required></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="catatan" class="form-label">Catatan <sup class="text-primary" font-size="20px">* </sup></label>
                                    <textarea name="catatan" class="form-control" id="" cols="6" rows="3"
                                            required></textarea>
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Update Laporan</button>
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
    @include('admin.layout.footer')


</body>

</html>
