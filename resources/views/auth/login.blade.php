@extends('admin.common.master-auth')
@section('title', __('login'))
@section('content')
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">
                    <div
                        class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                            <div class="card-body">
                                <img src="/admin/assets/images/login-images/login-cover.svg"
                                    class="img-fluid auth-img-cover-login" width="650" alt="" />
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
                                        <img src="/admin/assets/images/logo-icon.png" width="60" alt="">
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">{{ __('login_to_admin_panel') }}</h5>
                                        <p class="mb-0">{{ __('please_enter_your_info') }}</p>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="email" class="form-label">{{ __('username') }}</label>
                                                <input id="email" type="text"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" placeholder="{{ __('username') }}" required autofocus="none">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">{{ __('password') }}</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="{{ __('password') }}" required
                                                        autocomplete="current-password">
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
                                            <div class="col-md-12 mt-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">{{ __('remember_me') }}</label>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">{{ __('login') }}</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
												<div class="text-center ">
													<p class="mb-0">{{ __('do_not_have_an_account_yet') }} <a href="{{ route('register') }}">{{ __('create_account') }}</a>
													</p>
												</div>
											</div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
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
    </style>
@endpush
