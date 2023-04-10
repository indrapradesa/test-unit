<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $response as $data )
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data['nama'] }}</td>
              {{-- <td>{{ $data->prospek['nama'] }}</td> --}}
            </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
