@extends('admin.layouts.admin')
@section('title')
    ویرایش خدمات
@endsection
@section('address')
    ویرایش خدمات
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ویرایش بخش خدمات</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.services.update', ['service' => $service]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">تصویر فعلی</label>
                            <td>
                                <img style="height: 170px;object-fit: cover;width: 46%;margin-right: 100px;"
                                    class="card-img-top"
                                    src="{{ url(env('SERVICE_IMAGES_UPLOAD_PATH') . $service->image) }}" alt="">
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
                            <input type="text" name="title" value="{{ $service->title }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">توضیحات</label>
                            <input type="text" name="description" value="{{ $service->description }}"
                                class="form-control" placeholder="توضیحات را وارد کنید">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">آیکون</label>
                            <input type="text" name="icon" value="{{ $service->icon }}" class="form-control"
                                placeholder="آیکون را وارد کنید">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">رنگ پس زمینه</label>
                            <input type="text" name="bg_color" value="{{ $service->bg_color }}" class="form-control"
                                placeholder="رنگ پس زمینه را وارد کنید">
                            @error('bg_color')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">رنگ موجی پس زمینه</label>
                            <input type="text" name="wave_color" value="{{ $service->wave_color }}" class="form-control"
                                placeholder="رنگ پس زمینه را وارد کنید">
                            @error('wave_color')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">ویرایش</button>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
