<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/alert', function () {
    return view('pages.alert');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/setting', function () {
    return view('pages.setting');
});

