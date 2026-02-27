@extends('admin.layouts.admin')
@section('title')
    ویرایش رزومه
@endsection
@section('address')
    ویرایش رزومه
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
            <form role="form" action="{{ route('admin.resumes.update', ['resume' => $resume]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" name="title" value="{{ $resume->title }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">توضیحات</label>
                            {{-- <input type="text" name="description" value="{{ $resume->description }}" class="form-control"
                                placeholder="توضیحات را وارد کنید"> --}}
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $resume->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">آیکون</label>
                            <input type="text" name="icon" value="{{ $resume->icon }}" class="form-control"
                                placeholder="آیکون را وارد کنید">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">تاریخ انجام</label>
                            <input type="text" name="date" value="{{ $resume->date }}" class="form-control"
                                placeholder="تاریخ انجام را وارد کنید">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">ویرایش</button>
                    <a href="{{ route('admin.resumes.index') }}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
