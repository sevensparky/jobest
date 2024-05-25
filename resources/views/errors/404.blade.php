@section('title', __('page-not-found'))
@extends('panels.common.header')
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <section class="text-center mt-5">
                                    <div class="error mx-auto" data-text="{{ __('404') }}">{{ __('404') }}</div>
                                    <p class="lead text-gray-800 mb-5">{{ __('page_not_found') }}</p>
                                    <a href="{{ route('home') }}">&larr; {{ __('back') }}</a>
                                </section>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <section class="d-flex justify-content-center"
                                    style="position: relative; {{ app()->isLocale('fa') ? 'left: 15%;' : 'right: 15%;' }}">
                                    <img src="/admin/home/panel/img/pic/undraw_page_not_found_re_e9o6.svg"
                                        style="{{ app()->isLocale('fa') ? 'right: 3%;' : 'left: 3%;' }}  ">
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('panels.common.footer')
