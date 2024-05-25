<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i>
            </div>

            <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal"
                data-bs-target="#SearchModal">
                <input class="form-control px-5" disabled="" type="search" placeholder="Search">
                <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i
                        class="bx bx-search"></i></span>
            </div>


            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none d-none" data-bs-toggle="modal"
                        data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:;"><i class="bx bx-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            @include('admin.common.partials.language-logo')
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            @include('admin.common.partials.all-language-logo')
                        </ul>

                    </li>
                    <li class="nav-item dark-mode d-none d-sm-flex d-none">
                        <a class="nav-link dark-mode-icon" href="javascript:;"><i class="bx bx-moon"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-app d-none">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                            href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="app-container p-2 my-2">
                                <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large d-none">
                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="header-notifications-list ps">
                                <!-- -->
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large d-none">

                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="header-message-list ps">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/assets/images/avatar.png') }}" class="user-img">
                    <div class="user-info">
                        <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0">{{ __('welcome') }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('user.view', auth()->user()->name) }}">
                            <i class="bx bx-user fs-5"></i><span>{{ __('profile') }}</span>
                        </a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('password.change.view') }}">
                            <i class="bx bx-lock-alt fs-5"></i><span>{{ __('change_password') }}</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('settings.index') }}">
                            <i class="bx bx-cog fs-5"></i><span>{{ __('settings') }}</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.panel') }}">
                            <i class="bx bxs-dashboard fs-5"></i><span>{{ __('dashboard') }}</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                            <i class="bx bx-detail fs-5"></i><span>{{ __('back_to_home') }}</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm">
                            @csrf

                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bx bx-log-out-circle"></i><span>{{ __('logout') }}</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
