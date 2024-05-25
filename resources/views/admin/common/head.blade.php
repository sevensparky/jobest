<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
    @if (app()->isLocale('en'))
	    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    @elseif (app()->isLocale('fa'))
	    <link href="{{ asset('admin/assets/css/bootstrap.rtl.min.css') }}" rel="stylesheet" />
    @endif

	<link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />

    @if (app()->isLocale('en'))
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet" />
    @elseif (app()->isLocale('fa'))
    <link href="{{ asset('admin/assets/css/app-rtl.css') }}" rel="stylesheet" />
    @endif

    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/sweetalert/sweetalert2.css') }}" rel="stylesheet" />

	<!-- Theme Style CSS -->
	<link href="{{ asset('admin/assets/css/dark-theme.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/css/semi-dark.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/css/header-colors.css') }}" rel="stylesheet" />
    @stack('styles')
	<title>@yield('title')</title>
</head>

<body>
