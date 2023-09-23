<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laporan ResikRek</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .slice {
      border: 1px solid rgb(155, 154, 154);
    }
    .text-start {
      text-align: left !important;
    }

    .text-center {
      text-align: center !important;
    }

    .mb-5 {
      margin-bottom: 3rem;
    }
  </style>
</head>
<body>
  <img src="{{asset('icon/resik-logo.png')}}" class="rounded mx-auto d-block mt-5" width="180" alt="">
  <p class="text-center">Your Health, Our Priority</p>
 
  <hr>
  <h5 class="text-center mb-4 mt-4 text-primary">Data Laporan Bisnis Usaha ResikRek</h5>

  <div class="container">

  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Before</th>
        <th scope="col">After</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Catatan</th>

        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>
        <td>Zan</td>
        <td><img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}" 
          style="height: 10rem;" class="img-circle elevation-2" alt="Image after"></td>
        <td><img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}" 
          style="height: 10rem;" class="img-circle elevation-2" alt="Image after"></td>
        <td>Bagus , Aman</td>
        <td>Jombang, ...</td>
        <td>Terbaik</td>
        
      </tr>
     
    </tbody>
  </table>
  </div>

 
  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>