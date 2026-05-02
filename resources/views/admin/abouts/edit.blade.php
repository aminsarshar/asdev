@extends('admin.layouts.admin')
@section('title')
    ویرایش درباره من
@endsection
@section('address')
    ویرایش درباره من
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ویرایش بخش درباره من</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.abouts.update', ['about' => $about]) }}" method="POST"
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
                                    src="{{ $about->image ? url(env('ABOUT_IMAGES_UPLOAD_PATH') . $about->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}"
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
                                    @if ($about->image)
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
                            <input type="text" name="title" value="{{ $about->title }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">توضیحات</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $about->description) }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه اول</label>
                            <input type="text" name="contact_button_text" value="{{ $about->contact_button_text }}"
                                class="form-control" placeholder="متن را وارد کنید">
                            @error('contact_button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه اول</label>
                            <input type="text" name="contact_button_link" value="{{ $about->contact_button_link }}"
                                class="form-control" placeholder="لینک دکمه را وارد کنید">
                            @error('contact_button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه دوم</label>
                            <input type="text" name="resume_button_text" value="{{ $about->resume_button_text }}"
                                class="form-control" placeholder="متن دکمه را وارد کنید">
                            @error('resume_button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه دوم</label>
                            <input type="text" name="resume_button_link" value="{{ $about->resume_button_link }}"
                                class="form-control" placeholder="لینک دکمه را وارد کنید">
                            @error('resume_button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">ویرایش</button>
                    <a href="{{ route('admin.abouts.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
