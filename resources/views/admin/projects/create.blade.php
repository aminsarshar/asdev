@extends('admin.layouts.admin')
@section('title')
    ایجاد پروژه
@endsection
@section('address')
    ایجاد پروژه
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ایجاد پروژه</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">دسته بندی</label>
                            <select name="category_id" class="form-control" data-live-search="true">
                                @foreach ($categories as $category)
                                <option value="0" disabled selected>انتخاب</option>
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-6 text-center">
                            <label class="d-block">تصویر</label>

                            {{-- پیش‌نمایش --}}
                            <div class="mt-2 mb-3">
                                <img id="imagePreview" src="{{ 'https://via.placeholder.com/300x200?text=No+Image' }}"
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
                                </span>
                            </div>

                            @error('image')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn text-white" style="background:#0abead ">ارسال</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
