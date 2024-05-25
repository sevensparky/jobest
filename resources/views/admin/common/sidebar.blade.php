<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="/admin/assets/images/logo-icon.png" class="logo-icon">
        </div>
        <div>
            <h4 class="logo-text">{{ __('dashboard') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li class="{{ setSidebarActive(['dashboard.panel']) }}">
            <a href="{{ route('dashboard.panel') }}">
                <div class="parent-icon "><i class="bx bxs-dashboard"></i>
                </div>
                <div class="menu-title">{{ __('dashboard') }}</div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['categories.*']) }}">
            <a href="{{ route('categories.index') }}">
                <div class="parent-icon"><i class="bx bx-list-ul"></i>
                </div>
                <div class="menu-title">{{ __('categories') }}</div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['articles.*']) }}">
            <a href="{{ route('articles.index') }}">
                <div class="parent-icon"><i class='bx bx-news'></i>
                </div>
                <div class="menu-title">{{ __('articles') }}</div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['industry-type.*']) }}">
            <a href="{{ route('industry-type.index') }}">
                <div class="parent-icon"><i class='bx bx-carousel'></i>
                </div>
                <div class="menu-title">{{ __('industry_type') }}</div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['organization-type.*']) }}">
            <a href="{{ route('organization-type.index') }}">
                <div class="parent-icon"><i class='bx bx-buildings'></i>
                </div>
                <div class="menu-title">{{ __('organization_type') }}</div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-user"></i></div>
                <div class="menu-title">{{ __('user_management') }}</div>
            </a>
            <ul>
                <li class="{{ setSidebarActive(['users.*']) }}">
                    <a href="{{ route('users.index') }}"><i class='bx bx-radio-circle'></i>{{ __('users') }}</a>
                </li>

                <li class="{{ setSidebarActive(['permissions.*']) }}">
                    <a href="{{ route('permissions.index') }}"><i class='bx bx-radio-circle'></i>{{ __('permissions') }}</a>
                </li>

                <li class="{{ setSidebarActive(['roles.*']) }}">
                    <a href="{{ route('roles.index') }}"><i class='bx bx-radio-circle'></i>{{ __('roles') }}</a>
                </li>

                <li class="{{ setSidebarActive(['user-role.*']) }}">
                    <a href="{{ route('user-role.index') }}"><i class='bx bx-radio-circle'></i>{{ __('user-role') }}</a>
                </li>
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-world"></i></div>
                <div class="menu-title">{{ __('location') }}</div>
            </a>
            <ul>
                <li class="{{ setSidebarActive(['countries.*']) }}">
                    <a href="{{ route('countries.index') }}"><i class='bx bx-radio-circle'></i>{{ __('countries') }}</a>
                </li>

                <li class="{{ setSidebarActive(['states.*']) }}">
                    <a href="{{ route('states.index') }}"><i class='bx bx-radio-circle'></i>{{ __('states') }}</a>
                </li>

                <li class="{{ setSidebarActive(['cities.*']) }}">
                    <a href="{{ route('cities.index') }}"><i class='bx bx-radio-circle'></i>{{ __('cities') }}</a>
                </li>
            </ul>
        </li>

        <li class="{{ setSidebarActive(['panel.calendar']) }}">
            <a href="{{ route('panel.calendar') }}">
                <div class="parent-icon"><i class='bx bxs-calendar'></i></div>
                <div class="menu-title">{{ __('calendar') }}</div>
            </a>
        </li>

        <li class="{{ setSidebarActive(['settings.index']) }}">
            <a href="{{ route('settings.index') }}">
                <div class="parent-icon"><i class='bx bx-wrench'></i></div>
                <div class="menu-title">{{ __('settings') }}</div>
            </a>
        </li>

    </ul>
</div>
