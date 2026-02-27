@extends('admin.layouts.admin')

@section('title','ویرایش خانه')
@section('address','ویرایش خانه')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="card-title text-white">ویرایش بخش اول</h3>
        </div>

        <form action="{{ route('admin.heros.update', $hero) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="row">

                    {{-- تصویر فعلی --}}
                    {{-- <div class="form-group col-md-6 text-center">
                        <label>تصویر فعلی</label>

                        @if($hero->image)
                            <div class="mt-2">
                                <img
                                    src="{{ url(env('HERO_IMAGES_UPLOAD_PATH') . $hero->image) }}"
                                    class="img-fluid rounded shadow"
                                    style="max-height:200px; object-fit:cover;"
                                    alt="hero image">
                            </div>
                        @else
                            <p class="text-muted mt-3">تصویری ثبت نشده است</p>
                        @endif
                    </div> --}}

                    {{-- آپلود تصویر جدید --}}
                    {{-- <div class="form-group col-md-6">
                        <label>تصویر جدید</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    {{-- تصویر فعلی + پیش نمایش --}}

<div class="form-group col-md-6 text-center">
    <label class="d-block">تصویر</label>

    {{-- پیش‌نمایش --}}
    <div class="mt-2 mb-3">
        <img
            id="imagePreview"
            src="{{ $hero->image ? url(env('HERO_IMAGES_UPLOAD_PATH') . $hero->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}"
            class="img-fluid rounded shadow"
            style="max-height:200px; object-fit:cover;"
            alt="preview">
    </div>

    {{-- آپلود باکس سفارشی --}}
    <div class="custom-upload-box">
        <input type="file" name="image" id="imageInput" hidden>

        <label for="imageInput" class="upload-label">
            📁 انتخاب تصویر
        </label>

        <span id="fileName" class="file-name">
            @if($hero->image)
                در صورت نیاز تصویر جدید انتخاب کنید
            @else
                هنوز فایلی انتخاب نشده
            @endif
        </span>
    </div>

    @error('image')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
</div>


                    {{-- عنوان --}}
                    <div class="form-group col-md-6">
                        <label>عنوان</label>
                        <input type="text" name="title" value="{{ old('title',$hero->title) }}"
                               class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- توضیحات (برای CKEditor) --}}
                    <div class="form-group col-md-12">
                        <label>توضیحات</label>
                        <textarea name="description" id="description"
                                  class="form-control">{{ old('description',$hero->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- فیلد کاری --}}
                    <div class="form-group col-md-6">
                        <label>فیلد کاری</label>
                        <input type="text" name="field" value="{{ old('field',$hero->field) }}"
                               class="form-control">
                        @error('field')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- متن دکمه --}}
                    <div class="form-group col-md-6">
                        <label>متن دکمه</label>
                        <input type="text" name="button_text" value="{{ old('button_text',$hero->button_text) }}"
                               class="form-control">
                        @error('button_text')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- لینک دکمه --}}
                    <div class="form-group col-md-6">
                        <label>لینک دکمه</label>
                        <input type="text" name="button_link" value="{{ old('button_link',$hero->button_link) }}"
                               class="form-control">
                        @error('button_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer text-left">
                <button type="submit" class="btn btn-warning">ویرایش</button>
                <a href="{{ route('admin.heros.index') }}" class="btn btn-danger">بازگشت</a>
            </div>

        </form>
    </div>
</div>

@endsection
