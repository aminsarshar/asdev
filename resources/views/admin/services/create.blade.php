@extends('admin.layouts.admin')
@section('title')
    ایجاد سرویس
@endsection
@section('address')
    ایجاد سرویس
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ایجاد سرویس</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                                placeholder="توضیحات را وارد کنید">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">آیکون</label>
                            <input type="text" name="icon" value="{{ old('icon') }}" class="form-control"
                                placeholder="آیکون را وارد کنید">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">رنگ پس زمینه</label>
                            <input type="text" name="bg_color" value="{{ old('bg_color') }}" class="form-control"
                                placeholder="رنگ پس زمینه را وارد کنید">
                            @error('bg_color')
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
                    <a href="{{route('admin.services.index')}}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
