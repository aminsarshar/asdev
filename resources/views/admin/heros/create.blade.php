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
        <div class="card" >
            <div class="card-header" style="background-color: #0abead">
                <h3 class="card-title text-white">مثال ساده</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.heros.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ایمیل را وارد کنید">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="پسورد را وارد کنید">
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn text-white" style="background:#0abead ">ارسال</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
