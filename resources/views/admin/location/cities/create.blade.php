@extends('admin.common.master')
@section('title', __('admin_panel_create_city'))
@include('common.alerts.alert')
@section('content')
    <div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">{{ __('create_city') }}</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('cities.store') }}" class="row g-3 needs-validation" novalidate="">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">{{ __('name') }}</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="{{ __('enter_name_of_city') }}" required="">
                    </div>
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror

                    <div class="col-md-12">
                        <label for="single-select-field" class="form-label">{{ __('choose_country') }}</label>
                        <select class="form-select" id="single-select-field" name="country_id" data-placeholder="{{ __('choose') }}">
                            <option></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
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
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
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

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/select2/js/select2-custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#country_id').on('change', function(){
                let country_id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('states.show', ':id') }}".replace(":id", country_id),
                    data: {},
                    success: function(response){
                        let html = '';

                        $.each(response, function(index, value) {
                            html += `<option value="${value.id}"> ${value.name} </option>`
                        });

                        $('.state').html(html)
                    },

                    error: function(xhr, status, error){

                    }
                });
            });
        });
    </script>

@endpush
