<body id="page-top">
@include('panels.common.header')
<div id="wrapper">
    @include('panels.common.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('panels.common.topbar')
            <div class="container-fluid">
                @yield('master')
            </div>
        </div>
        @include('panels.common.copyright')
    </div>
</div>
@include('panels.common.back-to-up')
@include('panels.common.logout-modal')
@include('panels.common.footer')
