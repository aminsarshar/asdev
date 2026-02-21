<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

route::prefix('admin-panel/management')->name('admin.')->group(function(){
    route::resource('heros' , HeroController::class);
    route::resource('abouts' , AboutController::class);
    route::resource('services' , ServiceController::class);
    route::resource('resumes' , ResumeController::class);

});

