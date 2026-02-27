@extends('admin.layouts.admin')
@section('title')
    ایجاد خانه
@endsection
@section('address')
    ایجاد خانه
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">مثال ساده</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.heros.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="description">توضیحات</label>
                            <textarea name="description" id="description" class="form-control" required placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">فیلد کاری</label>
                            <input type="text" name="field" value="{{ old('field') }}" class="form-control"
                                placeholder="فیلد را وارد کنید">
                            @error('field')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه</label>
                            <input type="text" name="button_text" value="{{ old('button_text') }}" class="form-control"
                                placeholder="متن دکمه را وارد کنید">
                            @error('button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه</label>
                            <input type="text" name="button_link" value="{{ old('button_link') }}" class="form-control"
                                placeholder="لینک دکمه را وارد کنید">
                            @error('button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 text-center">
                            <label class="d-block">تصویر <span class="text-danger">*</span></label>

                            {{-- پیش‌نمایش اولیه با عکس نمادین --}}
                            <div class="mt-2 mb-3">
                                <img id="imagePreview" src="{{ asset('images/placeholder-image.png') }}"
                                    class="img-fluid rounded shadow" style="max-height:200px; object-fit:cover;"
                                    alt="پیش‌نمایش تصویر">
                            </div>

                            {{-- آپلود باکس سفارشی --}}
                            <div class="custom-upload-box">
                                <input type="file" name="image" id="imageInput" required hidden>

                                <label for="imageInput" class="upload-label">
                                    📁 انتخاب تصویر
                                </label>

                                <span id="fileName" class="file-name">
                                    لطفاً یک تصویر انتخاب کنید
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
                    <a href="{{ route('admin.heros.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
