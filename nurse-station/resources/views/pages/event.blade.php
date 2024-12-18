@extends('layouts.layout') <!-- Extends the parent layout -->

@section('title', 'Event') <!-- Sets the title for the page -->

@section('content') <!-- Injects content into the layout's @yield('content') -->
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold text-center">Welcome to Event</h1>
    <p class="text-gray-700 text-center mt-4">This is where your main content will appear.</p>
</div>
@endsection
