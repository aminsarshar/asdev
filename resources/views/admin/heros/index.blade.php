@extends('admin.layouts.admin')
@section('title')
    لیست خانه
@endsection
@section('address')
    لیست خانه
@endsection
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">بخش اول</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                                <a href="{{route('admin.heros.create')}}" class="btn btn-primary">ایجاد</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th>ردیف</th>
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>توضیحات</th>
                                <th>فیلد کاری</th>
                                <th>متن دکمه</th>
                                <th>لینک دکمه</th>
                                <th>تاریخ ایجاد</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach ($heros as $index => $hero)
                                <tr>
                                    <td>{{ $heros->firstItem() + $index }}</td>
                                    <td>
                                        <img src="{{ asset(env('HERO_IMAGES_UPLOAD_PATH') . $hero->image) }}"
                                            alt="{{ $hero->title }}" width="90px" height="100px"
                                            style="border-radius: 6px">
                                    </td>
                                    <td>{{ $hero->title }}</td>
                                    <td>{{ $hero->description }}</td>
                                    <td>{{ $hero->field }}</td>
                                    <td>{{ $hero->button_text }}</td>
                                    <td>{{ $hero->button_link }}</td>
                                    <td><span
                                            class="badge badge-success">{{ verta($hero->created_at)->format('%d  %B   %Y') }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.heros.update', $hero->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="toggle_default" value="1">

                                            <button
                                                class="btn btn-sm {{ $hero->is_default ? 'btn-danger' : 'btn-primary' }}">
                                                {{ $hero->is_default ? 'غیرفعال' : 'فعال‌سازی' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">عملیات</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">عملیات</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <form action="{{ route('admin.heros.destroy', $hero->id) }}" method="POST"
                                                    class="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="dropdown-item delete-btn">
                                                        حذف
                                                    </button>
                                                </form>

                                                <a class="dropdown-item"
                                                    href="{{ route('admin.heros.edit', ['hero' => $hero->id]) }}">ویرایش</a>
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
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const form = this.closest('.delete-form');

                Swal.fire({
                    title: 'آیا مطمئن هستید؟',
                    text: 'این عملیات قابل بازگشت نیست!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'بله، حذف شود',
                    cancelButtonText: 'لغو'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
