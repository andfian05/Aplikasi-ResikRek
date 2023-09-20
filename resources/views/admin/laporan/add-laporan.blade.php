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
              

             
                <h5 class="card-title fw-semibold mb-5 text-center">Add Laporan</h5>
                <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('laporan.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <div class="alert alert-danger" role="alert">
                        (*) Wajib Mengisi
                      </div>
                      <div class="mb-3">
                        <label for="user_id" class="form-label">Nama Pegawai<sup class="text-danger" 
                            font-size="20px">* </sup></label>
                        <select name="user_id" id="user_id" class="form-control" required>
                          <option value="">--- Nama Pegawai ---</option>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="before_foto" class="form-label">Before <sup class="text-danger" font-size="20px">* </sup></label>
                        <input type="file" name="before_foto" class="form-control" id="before_foto" required>
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="after_foto" class="form-label">After <sup class="text-danger" font-size="20px">* </sup></label>
                        <input type="file" name="after_foto" class="form-control" id="after_foto" required>
                      </div>
                      
                      

                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi <sup class="text-danger" font-size="20px">* </sup></label>
                        <textarea name="deskripsi" class="form-control" id="" cols="6" rows="3"
                                required></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi <sup class="text-danger" font-size="20px">* </sup></label>
                        <select name="lokasi" id="lokasi" class="form-control">
                          <option value=""></option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan <sup class="text-danger" font-size="20px">* </sup></label>
                        <textarea name="catatan" class="form-control" id="" cols="6" rows="3"
                                required></textarea>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Tambah Laporan</button>
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

  <script>
    $(function () {
      $('#user_id').on('change', function() {
        let id_user = $('#user_id').val();

        $.ajax({
          type : 'POST',
          url : "{{ route('getLokasi') }}",
          data : {id_user:id_user, _token:"{{ csrf_token() }}"},
          cache : false,
          success: function(msg) {
            $('#lokasi').html(msg);
          },
          error: function(data) {
            console.log('error:', data);
          },
        })
      })
    })
  </script>


</body>

</html>