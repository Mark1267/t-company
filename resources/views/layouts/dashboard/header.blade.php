<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box text-center">
                <a href="{{ Auth::user()->admin ? route('admin.overview') : route('user.overview') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo-sm-dark" height="44">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo-dark" height="48">
                    </span>
                </a>

                <a href="{{ Auth::user()->admin ? route('admin.overview') : route('user.overview') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo-sm-light" height="44">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo-light" height="48">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-xs header-profile-user bg-white">
                        <span class="avatar-title bg-primary rounded-circle" style="font-size: 10px;">
                            {{ Str::upper(Str::substr(Auth::user()->username, 0, 1)) }}
                        </span>
                    </div>
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->username }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a 
                            class="dropdown-item text-danger" 
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                        >
                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i> {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>