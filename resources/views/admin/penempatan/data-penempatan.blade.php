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
              
              <a class="btn btn-secondary m-1 mb-3" href="{{ route('penempatan.create') }}">
                <i class="fa-solid fa-plus"></i>&nbsp;Add Penempatan
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
                  <input type="text" class="form-control" placeholder="Pencarian Data [Ketik Data + (Enter)]  -  Reset Pencarian [Hapus Data + (Enter)]" aria-label="" aria-describedby="cari" name="cari" id="cari" value="{{ $cari }}">
                  
                  
                </div>
                
               
              </form>

              <div class="alert alert-secondary text-primary" role="alert">
                Kata Kunci Pencarian : Alamat
              </div>

              <div class="card">
                <div class="card-body">
                  <form>
                    
                    <div class="table-responsive" id="no-more-tables">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">@sortablelink('user_id','Nama')</th>
                            <th scope="col">@sortablelink('kab_id','Kabupaten')</th>
                            <th scope="col">Alamat</th>
                            
                           
                            <th scope="col" class="text-center">Action</th> 
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
            
                          @php $no = 1 + (($penempatans->currentPage()-1) * $penempatans->perPage()); @endphp
                          @foreach($penempatans as $penempatan)
                          <tr>
                            <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                            <td data-title="Nama">{{ $penempatan->user->nama }}</td>
                            <td data-title="Kabupaten">{{ $penempatan->kabupaten->nama }}</td>
                            <td data-title="Alamat">{{ $penempatan->alamat }}</td>
                            <th class="d-flex justify-content-center">
                              <a class="btn btn-primary btn-sm me-2"
                                  href="{{ route('penempatan.show', $penempatan->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                              <a class="btn btn-success btn-sm me-2"
                                  href="{{ route('penempatan.edit', $penempatan->id) }}"><i class="fa-solid fa-pencil"></i> Update</a>
                              <form method="POST" 
                                  action="{{ route('penempatan.destroy', $penempatan->id) }}"
                                  style="display: inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm"
                                      onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                              </form>
                            </th>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $penempatans->appends(Request::except('page'))->render() !!}
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