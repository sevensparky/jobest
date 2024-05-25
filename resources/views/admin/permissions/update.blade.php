@extends('admin.common.master')
@section('title', __('admin_panel_edit_permission'))
@section('content')
<div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">    <div class="card">
        <div class="card-header px-4 py-3">
            <h5 class="mb-0">{{ __('edit_permission') }}</h5>
        </div>
        <div class="card-body p-4">
            <form method="POST" action="{{ route('permissions.update', $permission->id) }}" class="row g-3 needs-validation" novalidate="">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="name" class="form-label">{{ __('role_name') }}</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('example') }}: create-article" value="{{ old('name', optional($permission ?? null)->name) }}" required="">
                    <small class="">
                        {{ __permission_must_be_entered_to_english }}
                    </small><br>
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="description" class="form-label">{{ __('optional_description') }}</label>
                    <textarea class="form-control resize-none" name="description" id="description" placeholder="{{ __('example_create_article') }}" cols="3" rows="3">{{ old('description', optional($permission ?? null)->description) }}</textarea>
                    <small class="">
                        {{ __('description_must_be_linked_to_title') }}
                    </small><br>
                    @error('description')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror
                </div>

                <div class="col-md-12 mt-5">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                        <a href="{{ route('permissions.index') }}" type="button" class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
