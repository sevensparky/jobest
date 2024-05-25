@extends('admin.common.master')
@include('common.alerts.alert')
@section('title', __('admin_panel_change_password'))
@section('content')
    <div class="card radius-10 {{ app()->getLocale('fa') ? 'd-rtl' : '' }}">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">{{ __('change_password') }}</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-lg-8 mx-auto">
                <form action="{{ route('password.change') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">{{ __('current_password') }}</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <div class="input-group" id="show_hide_old_password">
                                <input id="old_password" type="password"
                                    class="form-control @error('old_password') is-invalid @enderror" name="old_password">
                                <a href="javascript:;" class="input-group-text bg-transparent">
                                    <i class="bx bx-hide"></i>
                                </a>
                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">{{ __('new_password') }}</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <div class="input-group" id="show_hide_password">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
                                <a href="javascript:;" class="input-group-text bg-transparent">
                                    <i class="bx bx-hide"></i>
                                </a>
                                <small><b>{{ __('password_rule') }}</b></small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">{{ __('password_confirmation') }}</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <div class="input-group" id="show_hide_password_confirmation">
                                <input id="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                     autocomplete="current-password_confirmation">
                                <a href="javascript:;" class="input-group-text bg-transparent">
                                    <i class="bx bx-hide"></i>
                                </a>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-sm-9 text-secondary">
                            <button type="submit" class="btn btn-primary px-4">{{ __('submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showHidePassword(id) {
            $(document).ready(function() {
                $(`#${id} a`).on('click', function(event) {
                    event.preventDefault();
                    if ($(`#${id} input`).attr("type") == "text") {
                        $(`#${id} input`).attr('type', 'password');
                        $(`#${id} i`).addClass("bx-hide");
                        $(`#${id} i`).removeClass("bx-show");
                    } else if ($(`#${id} input`).attr("type") == "password") {
                        $(`#${id} input`).attr('type', 'text');
                        $(`#${id} i`).removeClass("bx-hide");
                        $(`#${id} i`).addClass("bx-show");
                    }
                });
            });
        }

        showHidePassword('show_hide_password');
        showHidePassword('show_hide_old_password');
        showHidePassword('show_hide_password_confirmation');
    </script>
@endpush
