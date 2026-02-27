@extends('admin.layouts.admin')
@section('title')
    ایجاد رزومه
@endsection
@section('address')
    ایجاد رزومه
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">بخش رزومه</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.resumes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                placeholder="عنوان را وارد کنید">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">آیکون</label>
                            <input type="text" name="icon" value="{{ old('icon') }}" class="form-control"
                                placeholder="آیکون را وارد کنید">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">تاریخ انجام کار</label>
                            <input type="text" name="date" value="{{ old('date') }}" class="form-control"
                                placeholder="تاریخ انجام را وارد کنید">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">توضیحات</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn text-white" style="background:#0abead ">ارسال</button>
                    <a href="{{route('admin.resumes.index')}}" class="btn btn-danger">بازگشت</a>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>

@endsection
