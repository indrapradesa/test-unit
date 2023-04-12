@extends('d_sales.layouts.main')

@section('container')

<h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200">{{ $title }}</h2>

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
    <form action="/dashboard/prospek" method="post">
        @csrf
        <div class="mb-6">
            <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Customer Closing</label>
            <select id="prospek_id" name="prospek_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Customer--</option>
            @foreach ($prospek as $s)
            @if (old('prospek_id') == $s->idcust_prospek)
                <option value="{{ $s->idcust_prospek }}" selected>{{ $s->nama }}</option>
            @else
                <option value="{{ $s->idcust_prospek }}">{{ $s->nama }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="idjenis_cust" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Customer</label>
            <select id="idjenis_cust" name="idjenis_cust" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Jenis Customer--</option>
            @foreach ($jcust as $j)
            @if (old('idjenis_cust') == $j->idjenis_cust)
                <option value="{{ $j->idjenis_cust }}" selected>{{ $j->kategori_cust }}</option>
            @else
                <option value="{{ $j->idjenis_cust }}">{{ $j->kategori_cust }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <h6 class="text-lg font-bold dark:text-white">Data KTP Cutomer</h6>
        <div class="mb-6">
            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
            <input type="text" id="nik" name="nik" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nik') is-invalid
            @enderror" value="{{ old('nik') }}" placeholder="NIK">
            @error('nik')
            <div class="invalid-feedback text-gray-900 dark:text-white">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama') is-invalid
            @enderror" value="{{ old('nama') }}" placeholder="Nama Lengkap">
            @error('nama')
            <div class="invalid-feedback text-gray-900 dark:text-white">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="alamat_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
            <input type="text" id="almt_ktp" name="almt_ktp" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('almt_ktp') is-invalid
            @enderror" value="{{ old('almt_ktp') }}" placeholder="Alamat KTP">
            @error('almt_ktp')
            <div class="invalid-feedback text-gray-900 dark:text-white">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="idjenis_cust" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode ODP</label>
            <select id="idjenis_cust" name="idjenis_cust" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Kode ODP--</option>
            @foreach ($odp as $o)
            @if (old('idjenis_cust') == $o->idodp)
                <option value="{{ $o->idodp }}" selected>{{ $o->kode_odp }}</option>
            @else
                <option value="{{ $o->idodp }}">{{ $o->kode_odp }}</option>
            @endif
            @endforeach
            </select>
        </div>
        {{-- <div class="mb-6">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('alamat') is-invalid
            @enderror" value="{{ old('alamat') }}" placeholder="Alamat">
            @error('alamat')
            <div class="invalid-feedback text-gray-900 dark:text-white">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="no_tlpn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telephone</label>
            <input type="number" id="no_tlpn" name="no_tlpn" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('no_tlpn') is-invalid
            @enderror" value="{{ old('no_tlpn') }}" placeholder="6282******">
            @error('no_tlpn')
            <div class="invalid-feedback text-gray-900 dark:text-white">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Ketemu</label>
            <select class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="metode_id">
                <option selected>--Pilih Status--</option>
            @foreach ($metode as $c)
            @if (old('metode_id') == $c->id_metode)
                <option value="{{ $c->id_metode }}" selected>{{ $c->jenis_metode }}</option>
            @else
                <option value="{{ $c->id_metode }}">{{ $c->jenis_metode }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div>
        <div class="mb-6">
            <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Awal</label>
            <select id="status_id" name="status_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Status--</option>
            @foreach ($status as $s)
            @if (old('status_id') == $s->idstatus_cust)
                <option value="{{ $s->idstatus_cust }}" selected>{{ $s->jenis_status }}</option>
            @else
                <option value="{{ $s->idstatus_cust }}">{{ $s->jenis_status }}</option>
            @endif
            @endforeach
            </select>
        </div> --}}

        <button type="submit" class="focus:outline-none text-slate-100 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
        <button type="reset" class="ml-2 focus:outline-none text-slate-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        <a href="/dashboard/prospek/create" class="ml-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Back</a>
    </form>
</div>

@endsection
