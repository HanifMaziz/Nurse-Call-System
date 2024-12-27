<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DeviceController extends Controller
{
    public function index() {
        $current_time = Carbon::now('Asia/Jakarta')->format('H:i:s');
        $current_date = Carbon::now('Asia/Jakarta')->format('l, F j, Y');

        return view('pages.device-action', [
            'current_time' => $current_time,
            'current_date' => $current_date,
        ]);
    }

    public function checkDeviceLog()
    {
        // Get the latest device log entries
        $latestLogs = DB::table('device')
                        ->orderBy('updated_at', 'desc')
                        ->take(10) // Limit to the latest 10 logs
                        ->get();

        // Log the latest device logs
        Log::info('Checked Device Logs', [
            'latest_logs' => $latestLogs
        ]);

        // Optionally, return the logs as a response (for testing purposes)
        return response()->json($latestLogs);
    }

    public function callDevice(Request $request)
    {
        // Insert into device_staging table when the call button is clicked
        DB::table('device_staging')->insert([
            'DeviceStgCode' => '456',  // Example device code, can be dynamic
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('status', 'Device called successfully!');
    }

    public function resetDevice(Request $request)
    {
        // Insert into device_staging table when the reset button is clicked
        DB::table('device_staging')->insert([
            'DeviceStgCode' => '457',  // Example device code, can be dynamic
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('status', 'Device reset successfully!');
    }

}
