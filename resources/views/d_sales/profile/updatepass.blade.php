@extends('d_sales.layouts.main')

@section('container')

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
    @include('d_sales.partials.tabs')
    <div class="mb-2">
        <div class="my-2 -mt-2 mb-4 space-y-2 font-medium border-b border-gray-200 dark:border-gray-500">
        </div>
    </div>
    <div class="w-full">
        <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
            <div class="mb-6 dark:text-white">
                <h1 class="text-[24px]">Update Password</h1>
                <p class="text-[16px]">Dimohon untuk tidak menyebarkan password ke orang lain.</p>
            </div>
            <div class="my-3">
                <label for="passwordlama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Lama</label>
                <input type="password" name="passwordlama" id="passwordlama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block sm:w-80 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div class="my-3">
                <label for="passwordbaru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
                <input type="password" name="passwordbaru" id="passwordbaru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block sm:w-80 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div class="my-3">
                <label for="konfpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password Baru</label>
                <input type="password" name="konfpassword" id="konfpassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block sm:w-80 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">Konfirmasi</button>
        </form>
    </div>
</div>

@endsection
