@extends('admin.layouts.admin')
@section('title')
    لیست رزومه
@endsection
@section('address')
    لیست رزومه
@endsection
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                @if($resumes->count() != 0)
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
                                <a href="{{route('admin.resumes.create')}}" class="btn btn-primary">ایجاد</a>
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
                                <th>آیکون</th>
                                <th>تاریخ انجام کار</th>
                                <th>تاریخ ایجاد</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            @foreach ($resumes as $index => $resume)
                                <tr>
                                    <td>{{ $resumes->firstItem() + $index }}</td>
                                    <td>{{ $resume->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($resume->description, 20, '...') }}</td>
                                    <td>{{ $resume->icon }}</td>
                                    <td>{{ $resume->date }}</td>
                                    <td>{{ $resume->status }}</td>
                                    <td><span
                                            class="badge badge-success">{{ verta($resume->created_at)->format('%d  %B   %Y') }}</span>
                                    </td>
                                    {{-- <td>
                                        <form action="{{ route('admin.resumes.update', $resume->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="toggle_default" value="1">

                                            <button
                                                class="btn btn-sm {{ $resume->is_default ? 'btn-danger' : 'btn-primary' }}">
                                                {{ $resume->is_default ? 'غیرفعال' : 'فعال‌سازی' }}
                                            </button>
                                        </form>
                                    </td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">عملیات</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">عملیات</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <form action="{{ route('admin.resumes.destroy', $resume->id) }}" method="POST"
                                                    class="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="dropdown-item delete-btn">
                                                        حذف
                                                    </button>
                                                </form>

                                                <a class="dropdown-item"
                                                    href="{{ route('admin.resumes.edit', ['resume' => $resume->id]) }}">ویرایش</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div style="padding-top: 40px;padding-right:40%">
                            {{ $resumes->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                @else
                <div class="alert alert-warning" style="display: flex;justify-content: space-between;align-items: center;">سطری وجود ندارد  <a href="{{route('admin.resumes.create')}}" class="btn btn-primary text-light">ایجاد رزومه</a></div>
                @endif
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
