@extends('layouts.layout') 

@section('title', 'Event') 

@section('content')
<div class="flex-grow flex flex-col bg-white rounded shadow h-full">
    <div class="flex flex-col items-start justify-start px-8 py-8">
        <h1 class="text-3xl font-bold text-left" style="font-size: 1.875rem;">Table of Event</h1>
        <p id="current-date-time" class="text-base font-medium text-gray-500 sm:text-lg md:text-xl">
            Nurse Station • {{ $current_datetime }}
        </p>
    </div>
    
    <!-- Scrollable Table Body -->
    <div class="flex-grow overflow-hidden border-separate rounded-sm border border-solid flex flex-col px-4 pb-4">
        <table class="w-full table-fixed">
            <thead class="sticky top-0 bg-slate-400">
                <tr>
                    <th class="py-2 px-4 text-center border border-gray-400">Location</th>
                    <th class="py-2 px-4 text-center border border-gray-400">Event</th>
                    <th class="py-2 px-4 text-center border border-gray-400">Time</th>
                    <th class="py-2 px-4 text-center border border-gray-400">Duration (seconds)</th>
                </tr>
            </thead>
        </table>
        <div class="flex-1 overflow-y-auto">
            <table class="w-full table-fixed">
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td class="py-2 px-4 text-center border border-gray-400">{{ $event->device->DeviceName }}</td>
                            <td class="py-2 px-4 text-center border border-gray-400">{{ $event->status->StatusName }}</td>
                            <td class="py-2 px-4 text-center border border-gray-400">{{ $event->TimeStamp }}</td>
                            <td class="py-2 px-4 text-center border border-gray-400">
                                @php
                                    $minutes = floor($event->Duration / 60);
                                    $seconds = $event->Duration % 60;
                                    $durationText = '';
                                    if ($minutes > 0) {
                                        $durationText .= $minutes . ' m ';
                                    }
                                    if ($seconds > 0) {
                                        $durationText .= $seconds . ' s';
                                    }
                                @endphp
                                {{ $durationText }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
