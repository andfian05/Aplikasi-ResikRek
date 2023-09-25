<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.penempatan.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
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


                            <h5 class="card-title fw-semibold mb-5 text-center">Edit Penempatan</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('penempatan.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                            </a>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('penempatan.update', $penempatan->id) }}" method="POST" 
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="alert alert-info" role="alert">
                                          (*) Hanya Opsional 
                                        </div>
                                        <div class="mb-3">
                                          <label for="kabupaten" 
                                            class="form-label">Kabupaten / Kota <sup class="text-primary" font-size="20px">* </sup></label>
                                          <select name="kab_id" id="kabupaten" 
                                             class="form-control">
                                            @foreach ($kabupatens as $kabupaten)
                                              @if ($penempatan->kab_id == $kabupaten->id_kab)
                                                <option value="{{ $kabupaten->id_kab }}" selected>{{ $kabupaten->nama }}</option>
                                              @else
                                                <option value="{{ $kabupaten->id_kab }}">{{ $kabupaten->nama }}</option>
                                              @endif
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="kecamatan" class="form-label">Kecamatan <sup class="text-primary" font-size="20px">* </sup></label>
                                          <select name="kec_id" id="kecamatan" 
                                             class="form-control">
                                            @foreach ($kecamatans as $kecamatan)
                                              @if ($penempatan->kec_id == $kecamatan->id_kec)
                                                <option value="{{ $kecamatan->id_kec }}" selected>{{ $kecamatan->nama }}</option>
                                              @else
                                                {{-- <option value="{{ $kecamatan->id_kec }}">{{ $kecamatan->nama }}</option> --}}
                                              @endif
                                            @endforeach
                                          </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                          <label for="desa" class="form-label">Kelurahan / Desa <sup class="text-primary" font-size="20px">* </sup></label>
                                          <select name="desa_id" id="desa"  
                                            class="form-control">
                                            @foreach ($desas as $desa)
                                              @if ($penempatan->desa_id == $desa->id_desa)
                                                <option value="{{ $desa->id_desa }}" selected>{{ $desa->nama }}</option>
                                              @else
                                                {{-- <option value="{{ $desa->id_desa }}">{{ $desa->nama }}</option> --}}
                                              @endif
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="alamat" class="form-label">Alamat Lengkap <sup class="text-primary" font-size="20px">* </sup></label>
                                          <textarea name="alamat" class="form-control" 
                                            id="alamat" cols="6" rows="3"
                                            required>
                                            {{ old('alamat') ? old('alamat') : $penempatan->alamat }}
                                          </textarea>
                                        </div>
                               
                                    <br>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Update Penempatan</button>
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
