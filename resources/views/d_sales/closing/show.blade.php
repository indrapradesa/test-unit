@extends('d_sales.layouts.main')

@section('container')

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500 " >
<h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-white">{{ $title }}</h2>

    <div class="  grid lg:grid-cols-2 gap-4  md:grid-cols-1 mb-5">
        <div class="h-80  border-2 border-dashed rounded-lg dark:border-slate-500 flex items-center justify-center  ">
            <img class="max-h-80 sm:w-96 rounded-lg" src="https://static.sembilankita.com/user/ktp.png" alt="image description">
        </div>
        <div class="  p-2 px-3 py-3 border-2 border-dashed rounded-lg dark:border-slate-500 ">
            <h2 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-black md:text-lg dark:text-white">Data KTP</h2>
            <div class="mb-6">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK : {{ $custclosing->nik }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap : {{ $custclosing->nama }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin : {{ $custclosing->jk }} </label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat : {{ $custclosing->almt_ktp }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir : {{ $custclosing->tgl_lahir }}</label>
            </div>

        </div>


    </div>
    <h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-white">Informasi Tambahan</h2>
    <div class="grid grid-cols-1 border-2 border-dashed p-4">
        <div class="mb-6 ">
            <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Terpasang : {{ $custclosing->alamat_terpasang }}</label>
        </div>
        <div class="mb-6 ">
            <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koodinat : {{ $custclosing->koordinat }}</label>
        </div>
        <div class="mb-6 ">
            <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimasi Kabel : {{ $custclosing->estimasi_kbl }}</label>
        </div>
    </div>

</div>

</div>


{{-- <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500 " >

     <section>
    <h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-white">{{ $title }}</h2>
    <div class=" grid grid-col-3 grid-flow-col gap-4 md:grid-cols-1">
        <div class="h-80  border-2 border-dashed rounded-lg dark:border-slate-500 flex items-center justify-center  ">
            <img class="max-h-80 sm:w-96 rounded-lg" src="/img/logo.png" alt="image description">
        </div>
        <div class="  p-2 px-3 py-3 border-2 border-dashed rounded-lg dark:border-slate-500 ">
            <h2 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-black md:text-lg dark:text-white">Data KTP</h2>
            <div class="mb-6">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK : {{ $custclosing->nik }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap : {{ $custclosing->nama }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin : {{ $custclosing->jk }} </label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat : {{ $custclosing->almt_ktp }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir : {{ $custclosing->tgl_lahir }}</label>
            </div>

        </div>
      </div>

    </section>
    {{-- <div class="grid md:grid-cols-2 grid-rows-2">
        <div class="col-span-2 items-center justify-center flex border-2 border-dashed rounded-lg dark:border-slate-500">
            <img class="sm:h-auto sm:w-96 rounded-lg" src="/img/logo.png" alt="image description">
        </div>

        <div class="col-span-2 mt-2 p-2 px-3 py-3 border-2 border-dashed rounded-lg dark:border-slate-500">
            <h2 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-black md:text-lg dark:text-white">Data KTP</h2>
            <div class="mb-6">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK : </label>
                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $custclosing->nama }}" disabled>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap : {{ $custclosing->nama }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin : {{ $custclosing->jk }} </label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat : {{ $custclosing->almt_ktp }}</label>
            </div>
            <div class="mb-6 ">
                <label for="prospek_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir : {{ $custclosing->tgl_lahir }}</label>
            </div>
        </div>
        <div class="col-span-2">
            <img class="max-h-80 sm:w-96 rounded-lg" src="/img/logo.png" alt="image description">
        </div>
      </div>

</div> --}}

@endsection --}} --}}
