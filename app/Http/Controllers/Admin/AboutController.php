<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
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
            'contact_button_text' => 'required',
            'resume_button_text' => 'required',
            'contact_button_link' => 'required',
            'resume_button_link' => 'required',
        ]);

        $fileNameImage = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('ABOUT_IMAGES_UPLOAD_PATH')), $fileNameImage);

        About::create([
            'image' => $fileNameImage,
            'title' => $request->title,
            'description' => $request->description,
            'contact_button_text' => $request->contact_button_text,
            'contact_button_link' => $request->contact_button_link,
            'resume_button_text' => $request->resume_button_text,
            'resume_button_link' => $request->resume_button_link,
        ]);

        // Display a success toast with no title
        // toast()->success('خانه با موفقیت ایجاد شد');
        flash()->option('position', 'bottom-center')->success('درباره من با موفقیت انجام شد');
        return redirect()->route('admin.abouts.index');
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
    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        if ($request->has('toggle_default')) {

            $about->update([
                'is_default' => $about->is_default ? 0 : 1
            ]);

            flash()
                ->option('position', 'bottom-center')
                ->success('وضعیت با موفقیت تغییر کرد');

            return back();
        }
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png,svg,webp,gif',
            'title' => 'required',
            'description' => 'required',
            'contact_button_text' => 'required',
            'contact_button_link' => 'required',
            'resume_button_text' =>'required',
            'resume_button_link' =>'required',
        ]);

        if ($request->has('image')) {
            $fileNameImage = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('ABOUT_IMAGES_UPLOAD_PATH')), $fileNameImage);
        }

        $about->update([
            'image' => $request->has('image') ? $fileNameImage : $about->image,
            'title' => $request->title,
            'description' => $request->description,
            'contact_button_text' => $request->contact_button_text,
            'contact_button_link' => $request->contact_button_link,
            'resume_button_text' => $request->resume_button_text,
            'resume_button_link' => $request->resume_button_link,
        ]);

        // toast()->success('خانه با موفقیت ویرایش شد');
        flash()->option('position', 'bottom-center')->success('ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        flash()->option('position', 'bottom-center')->success('حذف با موفقیت انجام شد');
        return redirect()->route('admin.abouts.index');
    }
}
