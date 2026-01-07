<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\HeroController;

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

route::prefix('admin-panel/management')->name('admin.')->group(function(){
    route::resource('heros' , HeroController::class);
});
