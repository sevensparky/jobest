<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/admin/home/panel/img/favicon.png" type="image/x-icon">
    <link href="{{ asset('admin/home/panel/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    @if (app()->isLocale('en'))
        <link href="{{ asset('admin/home/panel/css/panel-ltr.css') }}" rel="stylesheet">
    @elseif (app()->isLocale('fa'))
        <link href="{{ asset('admin/home/panel/css/panel-rtl.css') }}" rel="stylesheet">
    @endif

    @stack('styles')
</head>
