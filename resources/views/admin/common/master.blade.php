@include('admin.common.head')

<div class="wrapper">

    @if (app()->isLocale('en'))
        @include('admin.common.sidebar')
    @elseif(app()->isLocale('fa'))
        @include('admin.common.sidebar-rtl')
    @endif

    @if (app()->isLocale('en'))
        @include('admin.common.header')
    @elseif(app()->isLocale('fa'))
        @include('admin.common.header-rtl')
    @endif

    <div class="page-wrapper">

        <div class="page-content">

            @yield('content')

        </div>

    </div>

    @include('admin.common.footer')

</div>

@include('admin.common.search')

@include('admin.common.js')
