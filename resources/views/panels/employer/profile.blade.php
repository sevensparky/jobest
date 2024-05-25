@extends('panels.common.master')
@section('master')
    <h1 class="h3 mb-4 text-gray-800">{{ __('profile') }}</h1>
    <form action="{{ route('company.profile.update', auth()->id()) }}" method="post" class="user" id="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button"
                    role="tab" aria-controls="nav-home" aria-selected="true">{{ __('company_info') }}</button>
                <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button"
                    role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('founding_info') }}</button>
                {{-- <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button"
                    role="tab" aria-controls="nav-contact" aria-selected="false">{{ __('account_settings') }}</button> --}}
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="form-body mt-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="logo">{{ __('logo') }}</label>
                                <div class="form-group">
                                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                        <input id="logo" name="logo" type="file" onchange="readURL(this);"
                                            class="form-control border-0">
                                        <label id="logo-label" for="logo"
                                            class="font-weight-light text-muted">{{ __('choose_file') }}</label>
                                        <div class="input-group-append">
                                            <label for="logo" class="btn btn-light m-0 rounded-pill px-4">
                                                <i class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                                    class="text-uppercase font-weight-bold text-muted">{{ __('choose_file') }}</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="txt-lastname">{{ __('banner') }}</label>
                                <div class="form-group">
                                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                        <input id="banner" name="banner" type="file" onchange="readURL(this);"
                                            class="form-control border-0">
                                        <label id="banner-label" for="banner"
                                            class="font-weight-light text-muted">{{ __('choose_file') }}</label>
                                        <div class="input-group-append">
                                            <label for="banner" class="btn btn-light m-0 rounded-pill px-4">
                                                <i class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                                    class="text-uppercase font-weight-bold text-muted">{{ __('choose_file') }}</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">{{ __('company_name') }}</label>
                        <div class="form-group">
                            <textarea class="form-control form-control-user resize-none" name="name" id="name" placeholder="">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bio">{{ __('company_bio') }}</label>
                        <div class="form-group">
                            <textarea class="form-control form-control-user resize-none" name="bio" id="bio" placeholder="">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vision">{{ __('company_vision') }}</label>
                        <div class="form-group">
                            <textarea class="form-control form-control-user resize-none" name="vision" id="vision" placeholder="">
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="form-body mt-3">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="industry_type_id">{{ __('industry_type') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="industry_type_id" id="industry_type_id"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="organization_type_id">{{ __('organization_type') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="organization_type_id" id="organization_type_id"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="team_size_id">{{ __('team_size') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="team_size_id" id="team_size_id"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="establishment_date">{{ __('establishment_date') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="establishment_date" id="establishment_date"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="website">{{ __('website') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="website" id="website"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">{{ __('email') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" id="email"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">{{ __('phone') }}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="phone" id="phone"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="country">{{ __('country') }}</label>
                                <div class="form-group">
                                    <select class="form-control border-30 country" name="country" id="country" tabindex="-1" aria-hidden="true">
                                        <option value=""></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="state">{{ __('state') }}</label>
                                <div class="form-group">
                                    <select name="state" id="state" class="form-control border-30 state" tabindex="-1" aria-hidden="true">
                                        <option value=""></option>
                                        {{-- @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="city">{{ __('city') }}</label>
                                <div class="form-group">
                                        <select name="city" id="city" class="form-control border-30" tabindex="-1" aria-hidden="true">
                                            <option value=""></option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="map_link">{{ __('map_link') }}</label>
                        <div class="form-group">
                            <input class="form-control form-control-user resize-none" name="map_link" id="map_link" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">{{ __('address') }}</label>
                        <div class="form-group">
                            <textarea class="form-control form-control-user resize-none" name="address" id="address" placeholder="">
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="form-body mt-3">
                    <form class="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="txt-firstname">{{ __('username') }}</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="txt-lastname">{{ __('email') }}</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="txt-firstname">{{ __('password') }}</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="txt-lastname">{{ __('password_confirmation') }}</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-8 mx-auto mt-3">
                                <button type="submit" class="btn btn-facebook btn-user btn-block">
                                    {{ __('submit') }}
                                    <i class="fa fa-save"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-7 mx-auto mt-3">
            <button type="submit" class="btn btn-facebook btn-user btn-block border-30" id="btn-submit">
                {{ __('submit') }}
                <i class="fa fa-save"></i>
            </button>
        </div>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" />

    <style>
        form {
            margin: 50px;
        }

        input {
            display: none;
        }

        .label-custom {
            cursor: pointer;
            padding: 28px 10px;
            color: #fff;
            background-image: url('/admin/home/panel/img/undraw_profile_2.svg');
            border-radius: 50%;
        }

        #logo {
            opacity: 0;
        }

        #logo-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        #banner {
            opacity: 0;
        }

        #banner-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        .border-30 {
            border-radius: 30px !important;
        }
    </style>
@endpush

@push('scripts')
<script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/select2/js/select2-custom.js') }}"></script>

<script>
 $(document).ready(function() {
    $('.country').on('change', function(){
        let country_id = $(this).val();
        $.ajax({
            method: 'GET',
            url: "{{ route('get.state', ':id') }}".replace(":id", country_id),
            data: {},
            success: function(response){
                let html = '';

                $.each(response, function(index, value) {
                    html += `<option value="${value.id}"> ${value.name} </option>`;

                    console.log(value);
                });

                $('.state').html(html)
            },

            error: function(xhr, status, error){

            }
        });
    });
});


    $('#btn-submit').click(function (){
        $('#form').submit();
    });
</script>
@endpush

