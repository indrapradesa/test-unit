<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        {{-- <a href="/dashboard/posts/create" class="btn btn-primary m-2">Verify Data</a> --}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Alamat Trapasang</th>
                <th scope="col">Koordinat</th>
                <th scope="col">Estimasi Kabel</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $closing as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['nik'] }}</td>
                <td>{{ $data->prospek['nama'] }}</td>
                <td>{{ $data->prospek['no_tlpn'] }}</td>
                <td>{{ $data['alamat_terpasang'] }}</td>
                <td>{{ $data['koordinat'] }}</td>
                <td>{{ $data['estimasi_panjang_kabel'] }}/m</td>
                <td>
                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                    <a href="/closing/{{ $data->id_custClosing }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></span></a>
                    <form action="#" method="post" class="d-inline">
                        @method('delete')
                        {{-- @dd($post->slug) --}}
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin Data Di Hapus?')"><i class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
