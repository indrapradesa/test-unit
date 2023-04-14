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


            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
            {{-- <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-row mb-6">
                    <div class="basis-1/2 mr-4">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RW</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="columns-xs px-5"> --}}
        {{-- <div class="grid grid-rows-2 grid-flow-col px-10">
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
        <div class="w-full h-auto max-w-4xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
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
    </div> --}}
{{-- </div> --}}


@endsection
