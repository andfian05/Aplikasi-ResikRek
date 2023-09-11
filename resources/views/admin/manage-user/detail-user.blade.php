<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.manage-user.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('admin.manage-user.layout.sidebar')



        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('admin.manage-user.layout.navbar')
            </header>


            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Detail User</h5>
                            <a class="btn btn-success m-1 mb-3" href="{{ route('manage-users.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                            </a>
                            <a class="btn btn-danger m-1 mb-3" href="">
                                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
                            </a>


                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $user->nama }}" id="nama" disabled>

                                        </div>
                                        <div class="mb-3">
                                            <label for="penempatan" class="form-label">Penempatan</label>
                                            <input type="text" name="penempatan" class="form-control"
                                                value="{{ $user->penempatan }}" id="penempatan" disabled>

                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Pemangku Kepentingan</label>
                                            <select name="role" id="role" type="text" class="form-control"
                                                aria-describedby="" disabled>
                                                <option value="{{ $user->role }}">--- {{ $user->role }} ---</option>
                                            </select>


                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ $user->username }}" id="username" disabled>

                                        </div>

                                        <div class="mb-2">
                                            <label for="foto" class="form-label mb-4">Foto</label>
                                            {{-- <div class="text-center">
                                                @empty($user->photo)
                                                <img src="{{asset('foto/profile/no-photo.png')}}" style="height:
                                            10rem;"
                                            class="img-circle elevation-2" alt="Image {{ $user->nama }}">
                                            @else
                                            <img src="{{asset('foto/profile')}}/{{ $user->photo }}"
                                                style="height: 10rem;" class="img-circle elevation-2"
                                                alt="Image {{ $user->nama }}">
                                            @endempty
                                        </div> --}}

                                        {{-- <div class="text-center">
                                            @empty($user->foto)
                                            <img src="{{asset('storage/img/no-photo.png')}}" style="height: 20rem;"
                                        class="img-circle elevation-2 img-thumbnail shadow-lg"
                                        alt="{{ $user->username }}">
                                        @else
                                        <img src="{{ asset('storage/img/'. $user->foto) }}" style="height: 20rem;"
                                            class="img-circle elevation-2 img-thumbnail shadow-lg"
                                            alt="{{ $user->username }}">
                                        @endempty
                                </div> --}}


                                <div class="col-sm-7 col-xl-5">
                                    <div class="card overflow-hidden rounded-2">
                                        <div class="position-relative">
                                            <a href="javascript:void(0)">

                                                @empty($user->foto)
                                                <img src="{{asset('storage/img/no-photo.png')}}"
                                                    class="card-img-top rounded-0" alt="{{ $user->username }}">
                                                @else
                                                <img src="{{ asset('storage/img/'. $user->foto) }}"
                                                    class="card-img-top rounded-0" alt="{{ $user->username }}">
                                                @endempty
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i>
                                            </a>
                                        </div>


                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fw-semibold fs-4">{{ $user->nama }}</h6>
                                            <div class="d-flex align-items-center justify-content-between">

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
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
