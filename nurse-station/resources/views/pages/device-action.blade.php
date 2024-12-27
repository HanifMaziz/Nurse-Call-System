@extends('layouts.layout')

@section('title', 'Device Actions')

@section('content')
@if(session('status'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('status') }}
    </div>
@endif

<div class="flex flex-col items-center bg-gray-100 min-h-screen py-8">
    <h1 class="text-3xl font-bold mb-6">Device Actions</h1>

    <!-- Call Button -->
    <form action="{{ route('device.call') }}" method="POST" class="mb-4">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Call Device</button>
    </form>

    <!-- Reset Button -->
    <form action="{{ route('device.reset') }}" method="POST">
        @csrf
        <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Reset Device</button>
    </form>
</div>
@endsection
