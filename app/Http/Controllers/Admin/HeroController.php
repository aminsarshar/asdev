<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heros = Hero::latest()->paginate(10);
        return view('admin.heros.index' , compact('heros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.heros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,svg,webp,gif',
            'title' => 'required',
            'description' => 'required',
            'field' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);

        $fileNameImage = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('HERO_IMAGES_UPLOAD_PATH')), $fileNameImage);

        Hero::create([
            'image' => $fileNameImage,
            'title' => $request->title,
            'description' => $request->description,
            'field' => $request->field,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ]);

        // Display a success toast with no title
        toast()->success('خانه با موفقیت ایجاد شد');
        return redirect()->route('admin.heros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
