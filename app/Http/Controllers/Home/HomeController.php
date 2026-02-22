<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Hero;
use App\Models\Resume;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::orderBy('id', 'desc')->where('is_default', 1)->take(1)->first();
        $about = About::orderBy('id', 'desc')->where('is_default', 1)->take(1)->first();
        $services = Service::get()->where('is_default', 1)->take(6);
        $resumes = Resume::get()->where('status', 1)->take(6);

        return view('home.index', compact('hero', 'about' , 'services' , 'resumes'));
    }
}
