<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.penempatan.layout.header')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" 
    data-sidebartype="full"
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
            

              <h5 class="card-title fw-semibold mb-4 text-center">Data Penempatan</h5>
              
              <a class="btn btn-secondary m-1 mb-3" href="/add-penempatan">
                <i class="fa-solid fa-plus"></i>&nbsp;Add Penempatan
              </a>
              <a class="btn btn-danger m-1 mb-3" href="">
                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
              </a>
              <a class="btn btn-success m-1 mb-3" href="">
                <i class="fa-solid fa-file-excel"></i>&nbsp; Excel
              </a>
              <div class="card">
                <div class="card-body">
                  <form>
                    
                    <div class="table-responsive" id="no-more-tables">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Pegawai</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">Alamat</th>
                            
                           
                            <th scope="col" class="text-center">Action</th> 
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          {{-- @php $no = 1 + (($users->currentPage()-1) * $users->perPage()); @endphp
                          @foreach($users as $user) --}}
                          {{-- @php $no = 1; @endphp
                          @foreach ($users as $user) --}}
                          <tr>
                            <td scope="row" data-title="No" class="text-center">1</td>
                            <td data-title="Pegawai">Jaya</td>
                            <td data-title="Kabupaten">Jombang</td>
                            <td data-title="Alamat">Jl. KH. Bisri Syansuri RT 01/RW 05, Desa Plosogeneng Kecamatan Jombang, Kabupaten Jombang Jawa Timur, Indonesia</td>
                            <th class="d-flex justify-content-center">
                              <a class="btn btn-primary btn-sm me-2"
                                  href="/detail-penempatan"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                              <a class="btn btn-success btn-sm me-2"
                                  href="/edit-penempatan"><i class="fa-solid fa-pencil"></i> Update</a>
                              <form method="POST" action=""
                                  style="display: inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm"
                                      onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                              </form>
                            </th>
                          </tr>
                          {{-- @endforeach --}}
                            
                            
                        </tbody>
                        
                      </table>
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
  @include('admin.layout.footer')


</body>

</html>