<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
        <div>
            <h4 class="logo-text">{{ __('dashboard') }}</h4>
        </div>
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon">
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('dashboard.panel') }}">
                <div class="menu-title">{{ __('dashboard') }}</div>
                <div class="parent-icon"><i class="bx bxs-dashboard"></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('categories.index') }}">
                <div class="menu-title">{{ __('categories') }}</div>
                <div class="parent-icon"><i class="bx bx-list-ul"></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('articles.index') }}">
                <div class="menu-title">{{ __('articles') }}</div>
                <div class="parent-icon"><i class='bx bx-news'></i>
                </div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['industry-type.*']) }}">
            <a href="{{ route('industry-type.index') }}">
                <div class="menu-title">{{ __('industry_type') }}</div>
                <div class="parent-icon"><i class='bx bx-carousel'></i>
                </div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['organization-type.*']) }}">
            <a href="{{ route('organization-type.index') }}">
                <div class="menu-title">{{ __('organization_type') }}</div>
                <div class="parent-icon"><i class='bx bx-buildings'></i>
                </div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="menu-title">{{ __('user_management') }}</div>
                <div class="parent-icon"><i class="bx bx-user"></i></div>
            </a>
            <ul>
                <li class="{{ setSidebarActive(['users.*']) }}">
                    <a href="{{ route('users.index') }}">{{ __('users') }}<i class='bx bx-radio-circle'></i></a>
                </li>

                <li class="{{ setSidebarActive(['permissions.*']) }}">
                    <a href="{{ route('permissions.index') }}">{{ __('permissions') }}<i class='bx bx-radio-circle'></i></a>
                </li>

                <li class="{{ setSidebarActive(['roles.*']) }}">
                    <a href="{{ route('roles.index') }}">{{ __('roles') }}<i class='bx bx-radio-circle'></i></a>
                </li>

                <li class="{{ setSidebarActive(['user-role.*']) }}">
                    <a href="{{ route('user-role.index') }}">{{ __('user-role') }}<i class='bx bx-radio-circle'></i></a>
                </li>
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="menu-title">{{ __('location') }}</div>
                <div class="parent-icon"><i class="bx bx-world"></i>
                </div>
            </a>
            <ul>
                <li class="{{ setSidebarActive(['countries.*']) }}">
                    <a href="{{ route('countries.index') }}">{{ __('countries') }}<i class='bx bx-radio-circle'></i></a>
                </li>

                <li class="{{ setSidebarActive(['states.*']) }}">
                    <a href="{{ route('states.index') }}">{{ __('states') }}<i class='bx bx-radio-circle'></i></a>
                </li>

                <li class="{{ setSidebarActive(['cities.*']) }}">
                    <a href="{{ route('cities.index') }}">{{ __('cities') }}<i class='bx bx-radio-circle'></i></a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('panel.calendar') }}">
                <div class="menu-title">{{ __('calendar') }}</div>
                <div class="parent-icon"><i class='bx bxs-calendar'></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('settings.index') }}">
                <div class="menu-title">{{ __('settings') }}</div>
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
            </a>
        </li>

    </ul>
</div>
