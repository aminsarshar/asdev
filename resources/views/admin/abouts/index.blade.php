@extends('admin.layouts.admin')
@section('title')
    ایجاد درباره
@endsection
@section('address')
    ایجاد درباره
@endsection
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ایجاد درباره من</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                                <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary">ایجاد</a>
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
                                <th>متن دکمه اول</th>
                                <th>لینک دکمه اول</th>
                                <th>متن دکمه دوم</th>
                                <th>لینک دکمه دوم</th>
                                <th>تاریخ ایجاد</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach ($abouts as $index => $about)
                                <tr>
                                    <td>{{ $abouts->firstItem() + $index }}</td>
                                    <td>
                                        <img src="{{ asset(env('ABOUT_IMAGES_UPLOAD_PATH') . $about->image) }}"
                                            alt="{{ $about->title }}" width="90px" height="100px"
                                            style="border-radius: 6px">
                                    </td>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>{{ $about->contact_button_text }}</td>
                                    <td>{{ $about->contact_button_link }}</td>
                                    <td>{{ $about->resume_button_text }}</td>
                                    <td>{{ $about->resume_button_link }}</td>
                                    <td><span
                                            class="badge badge-success">{{ verta($about->created_at)->format('%d  %B   %Y') }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="toggle_default" value="1">

                                            <button
                                                class="btn btn-sm {{ $about->is_default ? 'btn-danger' : 'btn-primary' }}">
                                                {{ $about->is_default ? 'غیرفعال' : 'فعال‌سازی' }}
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
                                                <form action="{{ route('admin.abouts.destroy', $about->id) }}"
                                                    method="POST" class="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="dropdown-item delete-btn">
                                                        حذف
                                                    </button>
                                                </form>

                                                <a class="dropdown-item"
                                                    href="{{ route('admin.abouts.edit', ['about' => $about->id]) }}">ویرایش</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div style="padding-top: 40px;padding-right:40%">
                            {{ $abouts->links('pagination::bootstrap-4') }}
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
