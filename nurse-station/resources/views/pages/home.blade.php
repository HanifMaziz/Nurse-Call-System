@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<h1 class="text-sm font-normal text-left pb-8 sm:text-sm md:text-xl lg:text-2xl">
    Welcome <span class="font-bold text-blue-600">RSHS Bandung!</span>
</h1>

<div class="flex-grow flex flex-col bg-white p-6 rounded-lg shadow-lg justify-between">
    <div class="text-center mb-4">
        <p id="current-time" class="text-6xl font-bold text-gray-800 sm:text-7xl md:text-8xl lg:text-9xl">
            {{ $current_time }}
        </p>
    </div>
    <div class="text-center mb-4">
        <p id="current-date" class="text-lg font-semibold text-gray-600 sm:text-xl md:text-2xl">
            {{ $current_date }}
        </p>
    </div>
    <div class="text-center mt-8">
        <img src="{{ asset('images/logo.png') }}" alt="Nurse Call System Logo" class="mx-auto mb-4 w-32 sm:w-40 md:w-48 lg:w-56" />
        <p class="text-base font-medium text-gray-500 sm:text-lg md:text-xl">
            Nurse Call System
        </p>
    </div>
</div>

    <script>
        function updateTimeAndDate() {
            const timeElement = document.getElementById('current-time');
            const dateElement = document.getElementById('current-date');
            
            const currentDate = new Date().toLocaleString('en-US', { timeZone: 'Asia/Jakarta' });
            const formattedTime = new Date(currentDate).toLocaleTimeString('en-US', { hour12: false });
            const formattedDate = new Date(currentDate).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            timeElement.textContent = formattedTime;
            dateElement.textContent = formattedDate;
        }

        function checkAlertStatus() {
            fetch('/check-alert-status')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'Call') {
                        window.location.href = '/alert';
                    }
                })
                .catch(error => console.error('Error checking alert status:', error));
        }

        setInterval(checkAlertStatus, 5000);
        setInterval(updateTimeAndDate, 1000);

    </script>
@endsection
