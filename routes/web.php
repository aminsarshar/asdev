<?php

use App\Http\Controllers\Admin\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

route::prefix('admin-panel/management')->name('admin.')->group(function(){
    route::resource('heros' , HeroController::class);
});
