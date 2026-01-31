<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'bg_color' => 'required',
            'wave_color' => 'required',
        ]);

        // $fileNameImage = generateFileName($request->image->getClientOriginalName());
        // $request->image->move(public_path(env('SERVICE_IMAGES_UPLOAD_PATH')), $fileNameImage);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'bg_color' => $request->bg_color,
            'wave_color' => $request->wave_color,
        ]);

        // Display a success toast with no title
        // toast()->success('خانه با موفقیت ایجاد شد');
        flash()->option('position', 'bottom-center')->success('خدمات با موفقیت انجام شد');
        return redirect()->route('admin.services.index');
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
    public function edit(Service $service)
    {
        return view('admin.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        if ($request->has('toggle_default')) {

            $service->update([
                'is_default' => $service->is_default ? 0 : 1
            ]);

            flash()
                ->option('position', 'bottom-center')
                ->success('وضعیت با موفقیت تغییر کرد');

            return back();
        }
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'bg_color' => 'required',
            'wave_color' => 'required',
        ]);

        // if ($request->has('image')) {
        //     $fileNameImage = generateFileName($request->image->getClientOriginalName());
        //     $request->image->move(public_path(env('SERVICE_IMAGES_UPLOAD_PATH')), $fileNameImage);
        // }

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'bg_color' => $request->bg_color,
            'wave_color' => $request->wave_color,
        ]);

        // toast()->success('خانه با موفقیت ویرایش شد');
        flash()->option('position', 'bottom-center')->success('ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        flash()->option('position', 'bottom-center')->success('حذف با موفقیت انجام شد');
        return redirect()->route('admin.services.index');
    }
}
