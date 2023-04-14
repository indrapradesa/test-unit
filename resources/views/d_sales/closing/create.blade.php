@extends('d_sales.layouts.main')

@section('container')

<h5 class="mb-4 text-lg font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200">{{ $title }}</h5>

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
    <form action="/dashboard/closing" method="post">
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
            <label for="jenis_cust_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Customer</label>
            <select id="jenis_cust_id" name="jenis_cust_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Jenis Customer--</option>
            @foreach ($jcust as $j)
            @if (old('jenis_cust_id') == $j->idjenis_cust)
                <option value="{{ $j->idjenis_cust }}" selected>{{ $j->kategori_cust }}</option>
            @else
                <option value="{{ $j->idjenis_cust }}">{{ $j->kategori_cust }}</option>
            @endif
            @endforeach
            </select>
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
        <div class="p-4 mb-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-slate-500">
            <label class="text-md font-bold dark:text-white">Data KTP Cutomer</label>
            <div class="mb-6 mt-2">
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
            <div class="relative max-w mb-6">
                <label for="alamat_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">
            </div>
            <div class="mb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Jenis Kelamin</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Foto KTP</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
        </div>
        <button type="submit" class="focus:outline-none text-slate-100 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
        <button type="reset" class="ml-2 focus:outline-none text-slate-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        {{-- <a href="/dashboard/prospek/create" class="ml-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Back</a> --}}
    </form>
</div>

@endsection
