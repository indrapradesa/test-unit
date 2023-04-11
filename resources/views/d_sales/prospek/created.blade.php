@extends('d_sales.layouts.main')

@section('container')

<h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-white">{{ $title }}</h2>

<div class="col-lg-8">
    <form method="post" action="/dashboard/prospek">
        @csrf
        <div class="mb-6">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Customer</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama') is-invalid
            @enderror" autofocus value="{{ old('nama') }}" placeholder="Nama Customer">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('alamat') is-invalid
            @enderror" value="{{ old('alamat') }}" placeholder="Alamat">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="no_tlpn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telephone</label>
            <input type="number" id="no_tlpn" name="no_tlpn" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('no_tlpn') is-invalid
            @enderror" value="{{ old('no_tlpn') }}" placeholder="6282******">
            @error('no_tlpn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
        <label for="metode_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Ketemu</label>
            <select id="metode_id" name="metode_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            {{-- <option selected>--Pilih Metode--</option> --}}
            @foreach ($metode as $c)
            @if (old('metode_id') == $c->metode_id)
             <option value="{{ $c->metode_id }}" selected>{{ $c->jenis_metode }}</option>
             @else
             <option value="{{ $c->metode_id }}">{{ $c->jenis_metode }}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div class="mb-6">
        <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select id="status_id" nama="status_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            {{-- <option selected>--Pilih Status--</option> --}}
            @foreach ($status as $s)
            @if (old('status_id') == $s->status_id)
             <option value="{{ $s->status_id }}" selected>{{ $s->jenis_status }}</option>
             @else
             <option selected>--Pilih Status--</option>
             <option value="{{ $s->status_id }}">{{ $s->jenis_status }}</option>
            @endif
            @endforeach
        </select>
        </div>
        <button type="submit" class="focus:outline-none text-slate-100 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
        <button type="reset" class="focus:outline-none text-slate-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
    </form>
</div>
@endsection
