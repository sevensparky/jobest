@extends('admin.common.master')
@section('title', __('admin_panel_profile'))
@section('content')
    <div class="container d-rtl">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/admin/assets/images/avatar.png" alt="Admin"
                                    class="rounded-circle p-1 bg-light" width="110">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-secondary mb-1">{{ __('role') }}: {{ $user->userRole }}</p>
                                    <p class="text-muted font-size-sm">{{ __('date_of_created_account') }}: {{  setDateToJalali($user->created_at, '%B %d، %Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ __('username') }}</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" disabled
                                            value="{{ old('name', optional($user ?? null)->name) }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ __('email_address') }}</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" disabled value="{{ $user->email }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ __('phone_number') }}</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" disabled value="{{ $user->phone_number }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ __('address') }}</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <textarea name="address" id="address" cols="3" rows="3" class="form-control resize-none" disabled>{{ $user->address }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <button type="submit" class="btn btn-primary px-4">ثبت تغیرات</button> --}}
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
