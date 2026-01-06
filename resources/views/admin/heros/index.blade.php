@extends('admin.layouts.admin')
@section('title')
    ایجاد خانه
@endsection
@section('address')
    ایجاد خانه
@endsection
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">جدول ریسپانسیو</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان</th>
                                <th>توضیحات</th>
                                <th>فیلد کاری</th>
                                <th>متن دکمه</th>
                                <th>لینک دکمه</th>
                                <th>تاریخ ایجاد</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach ($heros as $index => $hero)
                                <tr>
                                    <td>{{ $heros->firstItem() + $index }}</td>
                                    <td>{{ $hero->title }}</td>
                                    <td>{{ $hero->description }}</td>
                                    <td>{{ $hero->field }}</td>
                                    <td>{{ $hero->button_text }}</td>
                                    <td>{{ $hero->button_link }}</td>
                                    <td><span class="badge badge-success">{{ $hero->created_at }}</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">عملیات</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">عملیات</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#">حدف</a>
                                                <a class="dropdown-item" href="#">ویرایش</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div style="padding-top: 40px;padding-right:40%">
                            {{ $heros->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
@endsection
