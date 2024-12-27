@extends('layouts.layout')

@section('title', 'Alerts')

@section('content')
<div class="flex flex-col items-center bg-gray-100  py-8">
    <h1 class="text-3xl font-bold mb-6">Device Alerts</h1>
    <div class="w-full max-w-4xl">
        @foreach ($alerts as $alert)
            <div class="flex flex-col bg-white rounded-lg shadow-md mb-4">
                <div class="bg-red-500 text-white text-sm px-4 py-2">
                    {{ \Carbon\Carbon::parse($alert->updated_at)->format('d/m/Y H:i') }}
                </div>
                <div class="flex justify-between items-center px-6 py-4">
                    <div>
                        <h2 class="text-xl font-bold">{{ $alert->Room }}</h2>
                        <p class="text-gray-600 italic">{{ $alert->DeviceName }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-500 text-sm">Call Point</p>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 23.5C13.1 23.5 13.99 22.61 13.99 21.51H10.01C10.01 22.61 10.9 23.5 12 23.5ZM19 17.5V11.5C19 8.15 16.64 5.35 13.5 4.67V3.5C13.5 2.67 12.83 2 12 2C11.17 2 10.5 2.67 10.5 3.5V4.67C7.35999 5.35 4.99999 8.15 4.99999 11.5V17.5L3.70999 18.79C3.07999 19.42 3.51999 20.5 4.40999 20.5H19.58C20.47 20.5 20.92 19.42 20.29 18.79L19 17.5ZM15 13.51H13V15.51C13 16.06 12.55 16.51 12 16.51C11.45 16.51 11 16.06 11 15.51V13.51H8.99999C8.44999 13.51 7.99999 13.06 7.99999 12.51V12.5C7.99999 11.95 8.44999 11.5 8.99999 11.5H11V9.5C11 8.95 11.45 8.5 12 8.5C12.55 8.5 13 8.95 13 9.5V11.5H15C15.55 11.5 16 11.95 16 12.5V12.51C16 13.06 15.55 13.51 15 13.51Z" fill="#3C3C43" fill-opacity="0.6"/>
                        </svg>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
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
