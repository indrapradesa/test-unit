@extends('d_sales.layouts.main')

@section('container')

<div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
    @include('d_sales.partials.tabs')
    <div class="mb-2">
        <div class="my-2 -mt-2 mb-4 space-y-2 font-medium border-b border-gray-200 dark:border-gray-500">
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border dark:border-gray-600">
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Komisi Real Time</th>
                    <td class="px-6 py-4">Rp.780.000</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Program Terpakai</th>
                    <td class="px-6 py-4">4 Cashback / 4 Promo50k</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Brosur</th>
                    <td class="px-6 py-4">0 Lembar Brosur di Sebar Hari Ini</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Closing</th>
                    <td class="px-6 py-4">1 Closing Hari Ini</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Approval Super Admin</th>
                    <td class="px-6 py-4">4 Menunggu Pembuatan Jadwal</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Proses Pasang</th>
                    <td class="px-6 py-4">0 Customer Proses Instalasi</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Terpasang</th>
                    <td class="px-6 py-4">13 Instalasi Selesai</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Sebar Brosur Bulan Ini</th>
                    <td class="px-6 py-4">0 Lembar Brosur Tersebar</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
