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
                            <a class="btn btn-success m-1 mb-3" href="/laporan">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                            </a>
                            <a class="btn btn-danger m-1 mb-3" href="">
                                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
                            </a>

                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                          <label for="nama" class="form-label">Nama</label>
                                          <input type="text" name="nama" class="form-control" id="nama" disabled>
                                          
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label mb-5">Before</label>
                                            {{-- <div class="text-left">
                                                @empty($user->photo)
                                                <img src="" style="height: 10rem;"
                                                    class="img-circle elevation-2 img-thumbnail shadow-lg" alt="Image ">
                                                @else
                                                <img src=""
                                                    style="height: 10rem;" class="img-circle elevation-2 img-thumbnail shadow-lg"
                                                    alt="Image ">
                                                @endempty
                                            </div> --}}

                                            <div class="col-sm-7 col-xl-5">
                                                <div class="card overflow-hidden rounded-2">
                                                    <div class="position-relative">
                                                        <a href="javascript:void(0)">
            
                                                           
                                                            {{-- <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                                class="card-img-top rounded-0" alt=""> --}}
                                                           
                                                            <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                                class="card-img-top rounded-0" alt="">
                                                            
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i>
                                                        </a>
                                                    </div>
            
            
                                                    <div class="card-body pt-3 p-4">
                                                        <h6 class="fw-semibold fs-4">Nama Pegawai</h6>
                                                        <div class="d-flex align-items-center justify-content-between">
            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label mb-5 mt-5">After</label>
                                            {{-- <div class="text-left">
                                                @empty($user->photo)
                                                <img src="" style="height: 10rem;"
                                                    class="img-circle elevation-2 img-circle elevation-2 img-thumbnail shadow-lg" alt="Image ">
                                                @else
                                                <img src=""
                                                    style="height: 10rem;" class="img-circle elevation-2 img-circle elevation-2 img-thumbnail shadow-lg"
                                                    alt="Image ">
                                                @endempty
                                            </div> --}}

                                            <div class="col-sm-7 col-xl-5">
                                                <div class="card overflow-hidden rounded-2">
                                                    <div class="position-relative">
                                                        <a href="javascript:void(0)">
            
                                                           
                                                            {{-- <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                                class="card-img-top rounded-0" alt=""> --}}
                                                           
                                                            <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                                class="card-img-top rounded-0" alt="">
                                                            
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i>
                                                        </a>
                                                    </div>
            
            
                                                    <div class="card-body pt-3 p-4">
                                                        <h6 class="fw-semibold fs-4">Nama Pegawai</h6>
                                                        <div class="d-flex align-items-center justify-content-between">
            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div><br><br>

                                        {{-- <div class="row form-label mb-5 mt-6">
                                            <div class="col-md-6">
                                                <div class="form mb-5 mt-6 mb-md-0">
                                                    <label for="nama" class="form-label text-justify" >Before </label>
                                                    <div class="text-left">
                                                        @empty($user->photo)
                                                        <img src="" style="height: 10rem;"
                                                            class="img-circle elevation-2" alt="Image ">
                                                        @else
                                                        <img src=""
                                                            style="height: 10rem;" class="img-circle elevation-2"
                                                            alt="Image ">
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-label">
                                                <div class="form mb-5 mt-6 mb-md-0">
                                                    <label for="anak_ke" class="form-label text-justify" >After </label>
                                                    <div class="text-left">
                                                        @empty($user->photo)
                                                        <img src="" style="height: 10rem;"
                                                            class="img-circle elevation-2" alt="Image ">
                                                        @else
                                                        <img src=""
                                                            style="height: 10rem;" class="img-circle elevation-2"
                                                            alt="Image ">
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        
                                        
                                        
                  
                                        <div class="mb-3">
                                          <label for="desc" class="form-label">Deskripsi</label>
                                          <textarea name="desc" class="form-control" id="" cols="6" rows="3"
                                                  required disabled></textarea>
                                        </div>
                                        <div class="mb-3">
                                          <label for="lokasi" class="form-label">Lokasi</label>
                                          <textarea name="lokasi" class="form-control" id="" cols="6" rows="3"
                                                  required disabled></textarea>
                                        </div>
                                        <div class="mb-3">
                                          <label for="catatan" class="form-label">Catatan</label>
                                          <textarea name="catatan" class="form-control" id="" cols="6" rows="3"
                                                  required disabled></textarea>
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
    @include('admin.layout.footer')


</body>

</html>
