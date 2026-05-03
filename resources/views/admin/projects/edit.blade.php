@extends('admin.layouts.admin')
@section('title')
    ویرایش پروژه
@endsection
@section('address')
    ویرایش پروژه
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ویرایش بخش پروژه</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.projects.update', ['project' => $project]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12 text-center">
                            <label class="d-block">تصویر</label>

                            {{-- پیش‌نمایش --}}
                            <div class="mt-2 mb-3">
                                <img id="imagePreview"
                                    src="{{ $project->image ? url(env('PROJECT_IMAGES_UPLOAD_PATH') . $project->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}"
                                    class="img-fluid rounded shadow" style="max-height:200px; object-fit:cover;"
                                    alt="preview">
                            </div>

                            {{-- آپلود باکس سفارشی --}}
                            <div class="custom-upload-box">
                                <input type="file" name="image" id="imageInput" hidden>

                                <label for="imageInput" class="upload-label">
                                    📁 انتخاب تصویر
                                </label>

                                <span id="fileName" class="file-name">
                                    @if ($project->image)
                                        در صورت نیاز تصویر جدید انتخاب کنید
                                    @else
                                        هنوز فایلی انتخاب نشده
                                    @endif
                                </span>
                            </div>

                            @error('image')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" name="title" value="{{ $project->title }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">عنوان</label>
                            <select id="categorySelect" name="category_id" class="form-control" data-live-search="true">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>



                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">ویرایش</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
