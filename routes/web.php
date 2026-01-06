<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
});
