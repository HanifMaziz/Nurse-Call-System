@extends('layouts.layout')

@section('title', 'Home')

@section('content') @yield('content')

<h1 class="text-2xl font-normal text-left pb-8">Welcome <span class="font-bold">RSHS Bandung!</span></h1>

<div class="bg-white p-6 rounded shadow min-h-96">
    <div class="justify-center text-center">
        tests
    </div>
    <div></div>
    <p class="text-gray-700 text-center mt-4">This is where your main content will appear.</p>
</div>

@endsection
