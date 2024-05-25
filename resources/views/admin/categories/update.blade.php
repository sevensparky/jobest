@extends('admin.common.master')
@section('title', __('admin_panel_edit_category'))
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('edit_category') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('categories.update', $category->id) }}" class="row g-3 needs-validation"
                    novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ $category->title }}" placeholder="{{ __('enter_title_of_category') }}" required="">
                    </div>
                    @error('title')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12 mt-5">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                            <a href="{{ route('categories.index') }}" type="button"
                                class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
