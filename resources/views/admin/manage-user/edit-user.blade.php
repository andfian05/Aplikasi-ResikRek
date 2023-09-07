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
              <a class="btn btn-success btn-sm-2" href="{{ route('manage-users.index') }}">
                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
              </a>
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4 text-center">Edit User</h5>
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('manage-users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" 
                          value="{{ old('nama') ? old('nama') : $user->nama }}">
                      </div>
                      <div class="mb-3">
                        <label for="penempatan" class="form-label">Penempatan</label>
                        <input type="text" name="penempatan" class="form-control" id="penempatan"  
                          value="{{ old('penempatan') ? old('penempatan') : $user->penempatan }}">
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto">
                        <img class="mt-2" src="{{ asset('img/profile/', $user->foto) }}" 
                          alt="{{ $user->username }}" width="10%">
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" 
                          value="{{ old('username') ? old('username') : $user->username }}">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" 
                          value="{{ old('password') ? old('password') : $user->password }}">
                      </div>
                      <div class="mb-3">
                        <label for="role" class="form-label">Pemangku Kepentingan</label>
                        <select name="role" id="role" type="text" class="form-control">
                          @if ($user->role == "Superadmin")
                            <option value="Superadmin" selected>Super Administrator</option>
                            <option value="Admin">Administrator</option>
                            <option value="Karyawan">Karyawan</option>
                          @elseif($user->role == "Admin")
                            <option value="Admin" selected>Administrator</option>
                            <option value="Superadmin">Super Administrator</option>
                            <option value="Karyawan">Karyawan</option>
                          @else    
                            <option value="Karyawan" selected>Karyawan</option>
                            <option value="Superadmin">Super Administrator</option>
                            <option value="Admin">Administrator</option>
                          @endif
                        </select>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
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