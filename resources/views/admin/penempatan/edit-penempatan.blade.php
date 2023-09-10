<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.penempatan.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('admin.penempatan.layout.sidebar')



        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('admin.penempatan.layout.navbar')
            </header>


            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">


                            <h5 class="card-title fw-semibold mb-5 text-center">Edit Penempatan</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="/penempatan">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                            </a>

                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                          <label for="nama" class="form-label">Pegawai</label>
                                          <input type="text" name="nama" class="form-control" id="nama">
                                          
                                        </div>
                                        <div class="mb-3">
                                          <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                                          <select name="kabupaten" id="kabupaten" type="text" class="form-control">
                                            <option value="">--- Kabupaten ---</option>
                                            <option value="1">Jombang</option>
                                            <option value="2">Mojokerto</option>
                                            <option value="3">Kediri</option>
                                            <option value="4">Ngajuk</option>
                                            <option value="5">Dst.</option>
                                            
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="kecamatan" class="form-label">Kecamatan</label>
                                          <select name="kabupaten" id="kabupaten" type="text" class="form-control">
                                            <option value="">--- Kecamatan ---</option>
                                            <option value="1">Seluruh Kecamatan Jombang</option>
                                            <option value="2">Seluruh Kecamatan Mojokerto</option>
                                            <option value="3">Seluruh Kecamatan Kediri</option>
                                            <option value="4">Seluruh Kecamatan Ngajuk</option>
                                            <option value="5">Seluruh Kecamatan Dst.</option>
                                            
                                          </select>
                                          
                                        </div>
                                        
                                        <div class="mb-3">
                                          <label for="username" class="form-label">Kelurahan</label>
                                          <select name="kabupaten" id="kabupaten" type="text" class="form-control">
                                            <option value="">--- Kelurahan ---</option>
                                            <option value="1">Seluruh Kelurahan Jombang</option>
                                            <option value="2">Seluruh Kelurahan Mojokerto</option>
                                            <option value="3">Seluruh Kelurahan Kediri</option>
                                            <option value="4">Seluruh Kelurahan Ngajuk</option>
                                            <option value="5">Seluruh Kelurahan Dst.</option>
                                            
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="lokasi" class="form-label">Alamat Lengkap</label>
                                          <textarea name="lokasi" class="form-control" id="" cols="6" rows="3"
                                                  required></textarea>
                                        </div>
                               
                                    <br>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Update Penempatan</button>
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
