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
              

             
                <h5 class="card-title fw-semibold mb-5 text-center">Add Penempatan</h5>
                <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('penempatan.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('penempatan.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="user_id" class="form-label">Pegawai</label>
                        <select name="user_id" id="user_id" class="form-control">
                          <option value="">--- Pegawai ---</option>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                        <select name="kab_id" id="kabupaten" class="form-control">
                          <option value="">--- Kabupaten ---</option>
                          @foreach ($kabupatens as $kabupaten)
                            <option value="{{ $kabupaten->id_kab }}">
                              {{ $kabupaten->nama }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <select name="kec_id" id="kecamatan" class="form-control">
                          <option value="">--- Kecamatan ---</option>
                          <option value=""></option>
                        </select>
                      </div>
                      
                      <div class="mb-3">
                        <label for="desa" class="form-label">Kelurahan</label>
                        <select name="desa_id" id="desa" class="form-control">
                          <option value="">--- Kelurahan ---</option>
                          <option value=""></option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="6" 
                          rows="3" required></textarea>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Tambah Penempatan</button>
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
      // select data wilayah
      $('#kabupaten').on('change', function(){
        let id_kab = $('#kabupaten').val();
  
        $.ajax({
          type : 'POST',
          url : "{{ route('getKecamatan') }}",
          data : {id_kab:id_kab, _token:"{{ csrf_token() }}"},
          cache : false,
          success: function(msg) {
            $('#kecamatan').html(msg);
          },
          error: function(data) {
            console.log('error:', data);
          },
        })
      })
      $('#kecamatan').on('change', function(){
        let id_kec = $('#kecamatan').val();
  
        $.ajax({
          type : 'POST',
          url : "{{ route('getDesa') }}",
          data : {id_kec:id_kec, _token:"{{ csrf_token() }}"},
          cache : false,
          success: function(msg) {
            $('#desa').html(msg);
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