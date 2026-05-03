<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg,webp,gif',
            'category_id' => 'required',
        ]);

        $fileNameImage = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('PROJECT_IMAGES_UPLOAD_PATH')), $fileNameImage);

        Project::create([
            'image' => $fileNameImage,
            'title' => $request->title,
            'category_id' => $request->category_id,
        ]);

        // Display a success toast with no title
        // toast()->success('خانه با موفقیت ایجاد شد');
        flash()->option('position', 'bottom-center')->success('ایجاد با موفقیت انجام شد');
        return redirect()->route('admin.projects.index');
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
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if ($request->has('toggle_default')) {

            $project->update([
                'is_default' => $project->is_default ? 0 : 1
            ]);

            flash()
                ->option('position', 'bottom-center')
                ->success('وضعیت با موفقیت تغییر کرد');

            return back();
        }
        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png,svg,webp,gif',
            'title' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->has('image')) {
            $fileNameImage = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('PROJECT_IMAGES_UPLOAD_PATH')), $fileNameImage);
        }

        $project->update([
            'image' => $request->has('image') ? $fileNameImage : $project->image,
            'title' => $request->title,
            'category_id' => $request->category_id,
        ]);

        // toast()->success('خانه با موفقیت ویرایش شد');
        flash()->option('position', 'bottom-center')->success('ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        flash()->option('position', 'bottom-center')->success('حذف با موفقیت انجام شد');
        return redirect()->route('admin.projects.index');
    }
}
