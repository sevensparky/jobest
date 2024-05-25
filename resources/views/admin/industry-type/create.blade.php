@extends('admin.common.master')
@section('title', __('admin_panel_create_industry_type'))
@include('common.alerts.alert')
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('create_industry_type') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('industry-type.store') }}" class="row g-3 needs-validation" novalidate="">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">{{ __('name') }}</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="{{ __('enter_name_of_industry_type') }}" required="">
                    </div>
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12 mt-5">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                            <a href="{{ route('industry-type.index') }}" type="button"
                                class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
