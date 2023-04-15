@extends('d_sales.layouts.main')

@section('container')

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
{{-- <div class="flex flex-row bg-white"> --}}
    {{-- <div class="grid grid-cols-3 gap-4"> --}}
    {{-- <div class="flex flex-row bg-cyan-200"> --}}
    <div class="grid grid-cols-1 md:grid-cols-2 bg-cyan-300">
        <div class="w-full max-w-5xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h2 class="text-black md:text-2xl dark:text-white mb-6">Profile</h2>
            <div class="flex flex-row mb-6">
                {{-- <div class="basis-1/2 mr-4"> --}}
                    <div class="flex-initial w-1/2 mr-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
                {{-- <div class="basis-1/2"> --}}
                    <div class="flex-initial w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="flex flex-row mb-6">
                {{-- <div class="basis-1/2 mr-4"> --}}
                    <div class="flex-initial w-1/2 mr-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
                {{-- <div class="basis-1/2"> --}}
                    <div class="flex-initial w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telephone</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="flex flex-row mb-6">
                {{-- <div class="basis-1/2 mr-4"> --}}
                    <div class="flex-initial w-1/2 mr-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
                {{-- <div class="basis-1/2"> --}}
                    <div class="flex-initial w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="flex flex-row mb-6">
                {{-- <div class="basis-1/2 mr-4"> --}}
                    <div class="flex-initial w-1/2 mr-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Divisi</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
                {{-- <div class="basis-1/2"> --}}
                    <div class="flex-initial w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
            <h2 class="text-black md:text-2xl dark:text-white mb-6">Alamat Detail</h2>
            <div>
                <div class="flex flex-row mb-6">
                    {{-- <div class="basis-1/2 mr-4"> --}}
                        <div class="flex-initial w-1/2 mr-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                    {{-- </div> --}}
                    {{-- <div class="basis-1/2"> --}}
                        <div class="flex-initial w-1/2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="flex flex-row mb-6">
                {{-- <div class="basis-1/2 mr-4"> --}}
                    <div class="flex-initial w-1/2 mr-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
                {{-- <div class="basis-1/2"> --}}
                    <div class="flex-initial w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dusun</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="flex flex-row mb-6">
                {{-- <div class="w-full"> --}}
                    <div class="flex-initial w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    <div class="sm:pl-0 md:pl-24">
    <div class="grid grid-rows-2 grid-flow-col mt-4 sm:mt-0">
        <div class="w-full h-96 max-w-2xl p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="columns-2 items-center justify-center flex">
                <img class="rounded-full h-auto max-w-xs" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="image description">
            </div>
            <div class="items-center justify-center flex mt-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level Sales</label>
            </div>
            <div class="items-center justify-center flex mt-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            </div>
            <div class="items-center justify-center flex mt-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
            </div>
        </div>
        <div class="w-full h-auto my max-w-4xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h2 class="text-black md:text-2xl dark:text-white mb-6">History Customer</h2>
            <div class="flex flex-row mb-6">
                <div class="basis-11/12">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Closing</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prospeek</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prospeek</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>


@endsection
