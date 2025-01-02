@extends('layouts.layout')

@section('title', 'Alerts')

@php
    $allow_scroll = 'overflow-auto';
@endphp

@section('content')
<div class="flex flex-col items-center bg-gray-100">
    <div class="w-full max-w-4xl">
        @if ($alerts->isEmpty())
            <h1 class="text-sm font-normal text-center pb-8 sm:text-sm md:text-xl lg:text-2xl">
                There is no alert at the moment.
            </h1>
        @endif
        @foreach ($alerts as $alert)
        <div class="bg-white rounded-lg shadow-md border mb-4">
            <!-- Header -->
            <div class="bg-red-600 text-white text-sm px-4 py-2 rounded-t-lg flex justify-between items-center">
                <span>{{ \Carbon\Carbon::parse($alert->updated_at)->format('d/m/Y H:i') }}</span>
            </div>
            <!-- Body -->
            <div class="flex justify-between items-center px-6 py-4">
                <!-- Left Side -->
                <div class="flex flex-row gap-10 items-center">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $alert->Room }}</h2>
                    <p class="pl-10 text-xl text-gray-500 italic">{{ $alert->DeviceName }}</p>
                </div>
                <!-- Right Side -->
                <div class="flex flex-col-reverse items-center">
                    <p class="text-gray-500 text-sm">Call Point</p>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 23C13.1 23 14 22.1 14 21H10C10 22.1 10.9 23 12 23ZM19 17V11C19 7.69 16.64 4.89 13.5 4.2V3C13.5 2.17 12.83 1.5 12 1.5C11.17 1.5 10.5 2.17 10.5 3V4.2C7.35999 4.89 5 7.69 5 11V17L3.71 18.29C3.08 18.92 3.52 20 4.41 20H19.58C20.47 20 20.92 18.92 20.29 18.29L19 17ZM15 13H13V15C13 15.55 12.55 16 12 16C11.45 16 11 15.55 11 15V13H9C8.45 13 8 12.55 8 12C8 11.45 8.45 11 9 11H11V9C11 8.45 11.45 8 12 8C12.55 8 13 8.45 13 9V11H15C15.55 11 16 11.45 16 12C16 12.55 15.55 13 15 13Z" fill="#3C3C43" fill-opacity="0.6"/>
                    </svg>
                </div>
            </div>
        </div>
        @endforeach
</div>

<script>
    function checkAlertStatus() {
        fetch('/check-alert-status')
            .then(response => response.json())
            .then(data => {
                if (data.status !== 'Call') {
                    window.location.href = '/';
                } else {
                    window.location.href = '/alert';
                }
            })
            .catch(error => console.error('Error checking alert status:', error));
    }

    setInterval(checkAlertStatus, 5000);

</script>
@endsection
