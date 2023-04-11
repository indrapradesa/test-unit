@extends('d_sales.layouts.main')

@section('container')

<div class="col-lg-8">
    <form action="/dashboard/prospek" method="post">
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
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode</label>
            <input type="number" id="metode_id" name="metode_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
        </div>
        <div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Ketemu</label>
            <select class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="metode_id">
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
              @foreach ($status as $s)
              @if (old('status_id') == $s->idstatus_cust)
               <option value="{{ $s->idstatus_cust }}" selected>{{ $s->jenis_status }}</option>
               @else
               <option value="{{ $s->idstatus_cust }}">{{ $s->jenis_status }}</option>
              @endif
              @endforeach
            </select>
          </div>
        {{-- <div class="mb-6">
        <label for="metode_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Ketemu</label>
            <select id="metode_id" name="metode_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
            @foreach ($status as $s)
            @if (old('status_id') == $s->status_id)
             <option value="{{ $s->status_id }}" selected>{{ $s->jenis_status }}</option>
             @else
             <option selected>--Pilih Status--</option>
             <option value="{{ $s->status_id }}">{{ $s->jenis_status }}</option>
            @endif
            @endforeach
        </select>
        </div> --}}
        <button type="submit" class="focus:outline-none text-slate-100 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
        <button type="reset" class="focus:outline-none text-slate-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
    </form>
</div>

<form action="/dashboard/prospect" method="post">
    @csrf
    <input type="text" name="sales_id" id="sales_id" value="1">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telp.</label>
            <input type="number" id="no_tlpn" name="no_tlpn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
        </div>
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
        </div>
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode</label>
            <input type="number" id="metode_id" name="metode_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
        </div>
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
            <input type="number" id="status_id" name="status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
        </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection
