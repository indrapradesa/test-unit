<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=.con, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="#">
            <h2>Data Personal</h2>
            <div class="mb-3">
                <img src="..." class="img-fluid" alt="...">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ old('nama', $closing->nik) }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ old('nama', $closing->prospek->nama) }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ old('nama', $closing->alamat_KTP) }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ old('nama', $closing->jenis_kelamin) }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Provinsi</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ old('nama', $closing->id_provinsi) }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <h2>Data Subcribe</h2>
            <div class="mb-3">
                <label for="nama" class="form-label">ID Customer</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" value="{{ $closing->idcust_prospek . $closing->idmetode_ketemu . $closing->idstatus_prospek . $closing->sales->karyawan_nip }}" readonly>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        </form>
    </div>
</body>
</html>
