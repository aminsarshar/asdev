@extends('admin.layouts.admin')
@section('title')
    لیست پروژه ها
@endsection
@section('address')
    لیست پروژه ها
@endsection
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ایجاد پروژه</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">ایجاد</a>
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
                                <th>دسته بندی</th>
                                <th>وضعیت</th>
                                <th>تاریخ ایحاد</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach ($projects as $index => $project)
                                <tr>
                                    <td>{{ $projects->firstItem() + $index }}</td>
                                    <td>
                                        <img src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . $project->image) }}"
                                            alt="{{ $project->title }}" width="90px" height="100px"
                                            style="border-radius: 6px">
                                    </td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->category->name }}</td>
                                    <td>
                                        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="toggle_default" value="1">

                                            <button
                                                class="btn btn-sm {{ $project->is_default ? 'btn-danger' : 'btn-primary' }}">
                                                {{ $project->is_default ? 'غیرفعال' : 'فعال‌سازی' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td><span
                                            class="badge badge-success">{{ verta($project->created_at)->format('%d  %B   %Y') }}</span>
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
                                                <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                    method="POST" class="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="dropdown-item delete-btn">
                                                        حذف
                                                    </button>
                                                </form>

                                                <a class="dropdown-item"
                                                    href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">ویرایش</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div style="padding-top: 40px;padding-right:40%">
                            {{ $projects->links('pagination::bootstrap-4') }}
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
