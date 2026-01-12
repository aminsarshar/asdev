<?php

namespace App\Http\Controllers\Home;

use App\Models\Hero;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $hero = Hero::orderBy('id', 'desc')->where('is_default', 1)->take(1)->first();
        $about = About::orderBy('id', 'desc')->where('is_default', 1)->take(1)->first();
        return view('home.index' , compact('hero' , 'about'));
    }
}
