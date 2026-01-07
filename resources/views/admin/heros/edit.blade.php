@extends('admin.layouts.admin')
@section('title')
    ویرایش خانه
@endsection
@section('address')
    ویرایش خانه
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">ویرایش بخش اول</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.heros.update', ['hero' => $hero]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">تصویر فعلی</label>
                            <td>
                                <img style="height: 170px;object-fit: cover;width: 46%;margin-right: 100px;"
                                    class="card-img-top" src="{{ url(env('HERO_IMAGES_UPLOAD_PATH') . $hero->image) }}"
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
                            <input type="text" name="title" value="{{ $hero->title }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">توضیحات</label>
                            <input type="text" name="description" value="{{ $hero->description }}" class="form-control"
                                placeholder="توضیحات را وارد کنید">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">فیلد کاری</label>
                            <input type="text" name="field" value="{{ $hero->field }}" class="form-control"
                                placeholder="فیلد را وارد کنید">
                            @error('field')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">متن دکمه</label>
                            <input type="text" name="button_text" value="{{ $hero->button_text }}" class="form-control"
                                placeholder="متن دکمه را وارد کنید">
                            @error('button_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">لینک دکمه</label>
                            <input type="text" name="button_link" value="{{ $hero->button_link }}" class="form-control"
                                placeholder="لینک دکمه را وارد کنید">
                            @error('button_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">ویرایش</button>
                    <a href="{{ route('admin.heros.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
