@extends('admin.common.master')
@section('title', __('admin_panel_edit_role'))
@section('content')
<div class="col-xl-10
    <div class="card">
        <div class="card-header px-4 py-3">
            <h5 class="mb-0">{{ __('update_role') }}</h5>
        </div>
        <div class="card-body p-4">
            <form method="POST" action="{{ route('roles.update', $role->id) }}" class="row g-3 needs-validation" novalidate="">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="name" class="form-label">{{ __('title') }}</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('example') }}: writer" value="{{ old('name', optional($role ?? null)->name) }}" required="">
                    @error('name')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="permission_id" class="form-label">{{ __('choose_permission') }}</label>
                        <select class="form-select" name="permission_id[]" data-placeholder="{{ __('select_an_item') }}" id="prepend-text-multiple-field" multiple>
                            <option value="">{{ __('select_an_item') }}</option>
                            @foreach ($permissions as $permission)
                               <option value="{{ $permission->id }}" {{ in_array(trim($permission->id), $role->permissions->pluck('id')->toArray())  ? 'selected' : '' }}>{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    @error('permission_id')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror
                </div>


                <div class="col-md-12">
                    <label for="name" class="form-label">{{ __('optional_description') }}</label>
                    <textarea class="form-control resize-none" name="description" id="description" placeholder="{{ __('example_writer') }}" cols="3" rows="3">{{ $role->description }}</textarea>
                    @error('description')
                        <small class="text text-danger"><b>{{ $message }}</b></small>
                    @enderror
                </div>


                <div class="col-md-12 mt-5">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                        <a href="{{ route('roles.index') }}" type="button" class="btn btn-secondary px-4 ms-auto">{{ __('cancel') }}</a>
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

