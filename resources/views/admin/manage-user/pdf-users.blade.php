<!DOCTYPE html>
<html lang="en">

<head>
  <title>Manage User ResikRek</title>
  <style>
    h5 {
      margin-top: 0;
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1.2;
      color: inherit;
    }

    h5 {
      font-size: 1.25rem;
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    .rounded {
      border-radius: 0.375rem !important
    }

    .mb-4 {
      margin-bottom: 1.5rem !important
    }

    .mt-4 {
      margin-top: 1.5rem !important
    }

    .mt-5 {
      margin-top: 3rem !important
    }

    .mx-auto {
      margin-right: auto !important;
      margin-left: auto !important
    }

    .d-block {
      display: block !important;
    }

    .text-center {
      text-align: center !important
    }

    .text-primary {
      color: rgba(13, 110, 253, 1) !important
    }

    img {
      vertical-align: middle
    }

    .slice {
      border: 1px solid rgb(155, 154, 154);
    }
  </style>
</head>

<body>
  <img src="{{ asset('icon/resik-logo.png') }}" class="rounded mx-auto d-block mt-5" 
    width="180px" alt="logo">
  <p class="text-center">Your Health, Our Priority</p>

  <hr style="height: 2px; border-width: 0; color:black; background-color:black">
  <h5 class="text-center mb-4 mt-4 text-primary">Data Manage-User Bisnis Usaha ResikRek</h5>

  <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="80%">
    <thead>
      <tr class="slice">
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $index => $user)
      <tr class="slice">
        <td class="text-center">{{ $index+1 }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->role }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <script>
    // window.print();
  </script>
</body>

</html>