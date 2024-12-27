<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function showAlerts()
    {
        // Fetch the latest status for each device where status is 'Calling'
        $latestAlerts = DB::table('device')
            ->join('status', 'device.StatusID', '=', 'status.StatusID')
            ->select('device.DeviceName', 'status.StatusName', 'device.updated_at')
            ->where('status.StatusName', 'Call')
            ->whereIn('device.DeviceID', function($query) {
                $query->select(DB::raw('MAX(DeviceID)'))
                    ->from('device')
                    ->groupBy('DeviceName');
            })
            ->orderBy('device.updated_at', 'desc')
            ->get();

        // Add default room numbers if needed
        $latestAlerts = $latestAlerts->map(function ($alert) {
            $alert->Room = 'Room 1'; // Default room assignment
            return $alert;
        });

       
        return view('pages.alert', ['alerts' => $latestAlerts]);
    }

    public function checkAlertStatus()
    {
        // Fetch the latest alert status from the database
        $latestAlert = DB::table('device')
            ->join('status', 'device.StatusID', '=', 'status.StatusID')
            ->select('status.StatusName')
            ->where('status.StatusName', 'Call')
            ->orderBy('device.updated_at', 'desc')
            ->first();

        // Return the status as a JSON response
        return response()->json([
            'status' => $latestAlert ? $latestAlert->StatusName : 'Idle'
        ]);
    }
}
