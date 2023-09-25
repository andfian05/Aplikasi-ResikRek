<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.manage-user.layout.header')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" 
    data-sidebartype="full"
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
              

             
                <h5 class="card-title fw-semibold mb-5 text-center">Add User</h5>
                <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('manage-users.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('manage-users.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <div class="alert alert-danger" role="alert">
                        (*) Wajib Mengisi
                      </div>

                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama <sup class="text-danger" font-size="20px">*</sup></label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                        
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label">Username <sup class="text-danger" font-size="20px">* </sup></label>
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password <sup class="text-danger" font-size="20px">* </sup></label>
                        <input type="password" name="password" class="form-control" id="password" required>
                      </div>
                      <div class="mb-3">
                        <label for="role" class="form-label">Pemangku Kepentingan <sup class="text-danger" font-size="20px">* </sup></label>
                        <select name="role" id="role" type="text" class="form-control" required>
                          <option value="">--- Role ---</option>
                          <option value="Superadmin">Super Administrator</option>
                          <option value="Admin">Administrator</option>
                          <option value="Karyawan">Karyawan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="penempatan" class="form-label">Penempatan <sup class="text-danger" font-size="20px">* </sup></label>
                        <select name="penempatan" id="penempatan" class="form-control" required>
                          <option value="">--- Penempatan ---</option>
                          @foreach ($penempatans as $penempatan)
                            <option value="{{ $penempatan->alamat }}">
                              {{ $penempatan->alamat }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto <sup class="text-danger" font-size="20px">* </sup></label>
                        <input type="file" name="foto" class="form-control" id="foto" required>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Tambah User</button>
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