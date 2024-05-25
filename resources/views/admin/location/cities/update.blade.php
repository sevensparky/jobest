@extends('admin.common.master')
@section('title', __('admin_panel_edit_city'))
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('edit_city') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('cities.update', $city->id) }}" class="row g-3 needs-validation"
                    novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="name" class="form-label">{{ __('name') }}</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $city->name }}" placeholder="{{ __('enter_name_of_city') }}" required="">
                    </div>
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12">
                        <label for="single-select-field" class="form-label">{{ __('choose_country') }}</label>
                        <select class="form-select" id="single-select-field" name="country_id" data-placeholder="{{ __('choose') }}">
                            <option></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" {{ $city->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('country_id')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12">
                        <label for="state_id" class="form-label">{{ __('choose_state') }}</label>
                        <select class="form-select" id="state_id" name="state_id" data-placeholder="{{ __('choose') }}">
                            <option></option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" {{ $city->state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('state_id')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12 mt-5">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                            <a href="{{ route('cities.index') }}" type="button"
                                class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
