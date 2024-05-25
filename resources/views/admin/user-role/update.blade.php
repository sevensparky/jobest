@extends('admin.common.master')
@section('title', __('admin_panel_edit_user-role'))
@section('content')
<div class="col-xl-10 mx-auto {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">    <div class="card">
        <div class="card-header px-4 py-3">
            <h5 class="mb-0">{{ __('edit_role_for_user') }} {{ $user->email }}</h5>
        </div>
        <div class="card-body p-4">
            <form method="POST" action="{{ route('user-role.update', $user->id) }}" class="row g-3 needs-validation" novalidate="">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <div class="input-group">
                        <select class="form-select" name="role_id" data-placeholder="{{ __('choose') }}" id="prepend-text-multiple-field">
                            <option value="">{{ __('choose') }}</option>
                            @foreach ($roles as $role)
                               <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }} - {{ $role->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('role_id')
                <small class="text text-danger"><b>{{ $message }}</b></small>
                @enderror

                <div class="col-md-12 mt-5">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                        <a href="{{ route('user-role.index') }}" type="button" class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('admin/assets/plugins/select2/js/select2-custom.js') }}"></script>
@endpush

