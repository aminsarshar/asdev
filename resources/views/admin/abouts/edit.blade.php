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
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">تصویر فعلی</label>
                            <td>
                                <img style="height: 170px;object-fit: cover;width: 46%;margin-right: 100px;"
                                    class="card-img-top" src="{{ url(env('ABOUT_IMAGES_UPLOAD_PATH') . $about->image) }}"
                                    alt="">
                            </td>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">تصویر</label>
                            <input type="file" name="image" class="form-control" placeholder="تصویر را وارد کنید">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
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
                            <input type="text" name="description" value="{{ $about->description }}" class="form-control"
                                placeholder="توضیحات را وارد کنید">
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
