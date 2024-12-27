<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
        $current_time = Carbon::now('Asia/Jakarta')->format('H:i:s');
        $current_date = Carbon::now('Asia/Jakarta')->format('l, F j, Y');

        return view('pages.home', [
            'current_time' => $current_time,
            'current_date' => $current_date,
        ]);
    }
    
}
