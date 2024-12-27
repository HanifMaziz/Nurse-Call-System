<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlertController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/alert', [AlertController::class, 'showAlerts']);
Route::get('/check-alert-status', [AlertController::class, 'checkAlertStatus']);
Route::get('/check-device-log', [DeviceController::class, 'checkDeviceLog']);

Route::get('/setting', function () {
    return view('pages.setting');
});

Route::get('/event', [EventController::class, 'showEventLog']);

Route::get('/device', [DeviceController::class, 'index']);
Route::post('/device/call', [DeviceController::class, 'callDevice'])->name('device.call');
Route::post('/device/reset', [DeviceController::class, 'resetDevice'])->name('device.reset');