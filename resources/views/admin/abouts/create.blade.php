@extends('admin.layouts.admin')
@section('title')
    ایجاد درباره
@endsection
@section('address')
    ایجاد درباره
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ایجاد درباره من</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="exampleInputPassword1">توضیحات</label>
                            <input type="text" name="description" id="description" value="{{ old('description') }}" class="form-control"
                                placeholder="توضیحات را وارد کنید">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه اول</label>
                            <input type="text" name="contact_button_text" value="{{ old('contact_button_text') }}"
                                class="form-control" placeholder="متن را وارد کنید">
                            @error('contact_button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه اول</label>
                            <input type="text" name="contact_button_link" value="{{ old('contact_button_link') }}"
                                class="form-control" placeholder="متن را وارد کنید">
                            @error('contact_button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه دوم</label>
                            <input type="text" name="resume_button_text" value="{{ old('resume_button_text') }}"
                                class="form-control" placeholder="متن را وارد کنید">
                            @error('resume_button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه دوم</label>
                            <input type="text" name="resume_button_link" value="{{ old('resume_button_link') }}"
                                class="form-control" placeholder="لینک را وارد کنید">
                            @error('resume_button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">تصویر</label>
                            <input type="file" name="image" class="form-control" placeholder="تصویر را وارد کنید">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn text-white" style="background:#0abead ">ارسال</button>
                    <a href="{{ route('admin.abouts.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
