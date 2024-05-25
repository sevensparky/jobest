<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">پنل مدیریت</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('employer.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('dashboard') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('employer.profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>{{ __('profile') }}</span>
        </a>
    </li>
 

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-cog"></i>
            <span>خطاها</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a target="_blank" class="collapse-item" href="403.html">صفحه ۴۰٣</a>
                <a target="_blank" class="collapse-item" href="404.html">صفحه ۴۰۴</a>
                <a target="_blank" class="collapse-item" href="500.html">صفحه ٥٠٠</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>نمودارها</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="calendar.html">
            <i class="fas fa-fw fa-calendar"></i>
            <span>تقویم</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="gallery.html">
            <i class="fas fa-images"></i>
            <span>گالری تصاویر</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-power-off"></i>
            <span>خروج</span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
