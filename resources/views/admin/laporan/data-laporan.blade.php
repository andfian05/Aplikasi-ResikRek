<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.laporan.layout.header')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" 
    data-sidebartype="full"
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
            

              <h5 class="card-title fw-semibold mb-4 text-center">Data Laporan</h5>
              
              <a class="btn btn-secondary m-1 mb-3" href="/add-laporan">
                <i class="fa-solid fa-plus"></i>&nbsp;Add Laporan
              </a>
              <a class="btn btn-danger m-1 mb-3" href="">
                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
              </a>
              <a class="btn btn-success m-1 mb-3" href="">
                <i class="fa-solid fa-file-excel"></i>&nbsp; Excel
              </a>
              <form method="GET" class="input-group mb-3">
                
        
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i>&nbsp; Search Data</span>
                  <input type="text" class="form-control" placeholder="Pencarian Data [Ketik Data + (Enter)]  -  Reset Pencarian [Hapus Data + (Enter)]" aria-label="" aria-describedby="" name="" id="" value="">
                  
                  
                </div>
                
               
              </form>




              <div class="card">
                <div class="card-body">
                  <form>
                    
                    <div class="table-responsive" id="no-more-tables">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Before</th>
                            <th scope="col">After</th>
                           
                           
                            <th scope="col" class="text-center">Action</th> 
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          
                          <tr>
                            <td scope="row" data-title="No" class="text-center">1</td>
                            <td data-title="Nama">Jaya</td>
                            <td data-title="Before"><img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}" width="70px" height="70px" alt=""></td>
                            <td data-title="After"><img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}" width="70px" height="70px" alt=""></td>
                            <th class="d-flex justify-content-center">
                              <a class="btn btn-primary btn-sm me-2"
                                  href="/detail-laporan"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                              <a class="btn btn-success btn-sm me-2"
                                  href="/edit-laporan"><i class="fa-solid fa-pencil"></i> Update</a>
                              <form method="POST" action=""
                                  style="display: inline-block;">
                                  
                                  <button class="btn btn-danger btn-sm"
                                      onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                              </form>
                            </th>
                          </tr>
                         
                            
                            
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