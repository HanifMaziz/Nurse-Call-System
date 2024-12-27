@extends('layouts.layout') 

@section('title', 'Event') 

@section('content')
<div class="flex-grow flex flex-col bg-white rounded shadow" style="padding-left: 2.5rem !important; padding-right: 2rem !important;">
    <div class="flex flex-col items-start justify-start px-8 py-8">
        <h1 class="text-3xl font-bold text-left" style="font-size: 1.875rem;">Table of Event</h1>
        <p id="current-date-time" class="text-base font-medium text-gray-500 sm:text-lg md:text-xl">
            Nurse Station • {{ $current_datetime}}
        </p>
    </div>
    
     <!-- Scrollable Table Body -->
     <div class="overflow-y-auto max-h-96 flex flex-grow">
    <table class="w-full table-auto border-collapse border border-gray-400">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 text-center border border-gray-400">Location</th>
                <th class="py-2 px-4 text-center border border-gray-400">Event</th>
                <th class="py-2 px-4 text-center border border-gray-400">Time</th>
                <th class="py-2 px-4 text-center border border-gray-400">Duration (seconds)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td class="py-2 px-4 text-center border border-gray-400">{{ $event->device->DeviceName }}</td>
                    <td class="py-2 px-4 text-center border border-gray-400">{{ $event->status->StatusName }}</td>
                    <td class="py-2 px-4 text-center border border-gray-400">{{ $event->TimeStamp }}</td>
                    <td class="py-2 px-4 text-center border border-gray-400">{{ $event->Duration }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
     </div>
    
</div>
<script>
    function updateTimeAndDate() {
        const timeElement = document.getElementById('current-date-time');
        
        const options = { timeZone: 'Asia/Jakarta', year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
        const jakartaTime = new Intl.DateTimeFormat('en-CA', options).format(new Date());

        const formattedDate = jakartaTime.replace(',', '').replace('T', ' ');

        timeElement.textContent = `Nurse Station • ${formattedDate}`;
    }

    setInterval(updateTimeAndDate, 1000);
</script>
@endsection