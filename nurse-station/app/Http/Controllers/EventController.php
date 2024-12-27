<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function showEventLog()
    {
        $events = Event::with(['device', 'status'])->get();
        $current_datetime = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');

        return view('pages.event', [
            'events' => $events,
            'current_datetime' => $current_datetime,
        ]);
    }
}