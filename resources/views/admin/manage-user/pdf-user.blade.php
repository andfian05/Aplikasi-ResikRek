<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage User ResikRek</title>
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
  <h3 class="text-center mb-5">Data User ResikRek</h3>
  <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="100%">
    <thead>
      <tr class="slice">
        <th class="text-center">No.</th>
        <th class="text-center">Nama Lengkap</th>
        <th class="text-center">Penempatan</th>
        <th class="text-center">Pemangku Kepentingan</th>
        <th class="text-center">Username</th>
        <th class="text-center">Foto</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($user as $index => $user)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->penempatan }}</td>
        <td>{{ $user->role }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->foto }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>