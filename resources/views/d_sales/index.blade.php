@extends('d_sales.layouts.main')

@section('container')

    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-black md:text-4xl dark:text-white">{{ auth()->user()->karyawan->nama }}</h2>

@endsection
