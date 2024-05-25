@extends('admin.common.master')
@section('title', __('admin_panel_create_state'))
@include('common.alerts.alert')
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('create_state') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('states.store') }}" class="row g-3 needs-validation" novalidate="">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">{{ __('name') }}</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="{{ __('enter_title_of_state') }}" required="">
                    </div>
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror


                    <div class="col-md-12">
                        <label for="country_id" class="form-label">{{ __('choose_country') }}</label>
                        <select class="form-select" id="country_id" name="country_id" data-placeholder="{{ __('choose') }}">
                            <option></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('country_id')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12 mt-5">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                            <a href="{{ route('states.index') }}" type="button"
                                class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('admin/assets/plugins/select2/js/select2-custom.js') }}"></script>
@endpush
