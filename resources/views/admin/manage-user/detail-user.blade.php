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
                <h5 class="card-title fw-semibold mb-5 text-center">Detail User</h5>
                <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('manage-users.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
                <div class="card">
                  <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" id="nama" disabled>
                        
                      </div>
                      <div class="mb-3">
                        <label for="penempatan" class="form-label">Penempatan</label>
                        <input type="text" name="penempatan" class="form-control" value="{{ $user->penempatan }}" id="penempatan" disabled>
                        
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $user->username }}" id="username" disabled>
                        
                      </div>
                      {{-- <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control"  value="{{ $user->password }}" id="password">
                      </div> --}}
                      {{-- <div class="mb-3">
                        <label for="role" class="form-label">Pemangku Kepentingan</label>
                        <select name="" id="role" type="text" class="form-control" aria-describedby="" value="">
                          <option value="">--- Role ---</option>
                         
                            <option value="">Administrator</option>
                            <option value="">Super Administrator</option>
                         
                        </select>
                      </div> --}}
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