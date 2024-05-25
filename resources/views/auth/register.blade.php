@extends('admin.common.master-auth')
@section('title', __('register'))
@section('content')
<div class="wrapper">
    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">

                <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                    <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                        <div class="card-body">
                             <img src="/admin/assets/images/login-images/register-cover.svg" class="img-fluid auth-img-cover-login" width="550" alt=""/>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                    <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                        <div class="text-left mb-5 h4">
                            <a href="{{ route('home') }}"><i class="bx bx-arrow-back"></i></a>
                        </div>
                        <div class="card-body p-sm-5">
                            <div class="d-rtl">
                                <div class="mb-3 text-center">
                                    <img src="/admin/assets/images/logo-icon.png" width="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <p class="mb-0">{{ __('please_enter_your_info') }}</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="phone_number" class="form-label">{{ __('phone_number') }}</label>
                                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="{{ __('phone_number') }}" required autofocus>

                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">{{ __('email_address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('email_address') }}" required  autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">{{ __('password') }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('password') }}" required autocomplete="current-password">
                                                    <a href="javascript:;" class="input-group-text bg-transparent">
                                                        <i class="bx bx-hide"></i>
                                                    </a>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">{{ __('password_confirmation') }}</label>
                                            <div class="input-group" id="show_hide_password_confirmation">
                                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('password_confirmation') }}" required autocomplete="current-password_confirmation">
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

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">{{ __('submit') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
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
        showHidePassword('show_hide_password_confirmation');
    </script>
@endpush

@push('styles')
    <style>
        #show_hide_password {
            border-right: hidden;
        }

        #password {
            border-left: hidden;
        }

        #password_confirmation {
            border-left: hidden;
        }
    </style>
@endpush

