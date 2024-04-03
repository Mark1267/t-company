    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('user.overview') }}">
                            <img class="brand-logo" alt="modern admin logo" src="{{ asset(config('settings.site.logo.full')) }}"><br />
                            <h3 class="brand-text">{{ config('settings.site.name') }}</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1">Hello,
                                    <span class="user-name text-bold-700">
                                        {{ Auth::user()->full_name }}
                                    </span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="{{ route('user.alerts') }}"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="{{ route('user.contact.new') }}"><i class="ft-message-square"></i> Support</a>
                                <a class="dropdown-item" href="{{ route('user.transaction.deposit.new') }}"><i class="ft-check-square"></i>New Investments</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a 
                                        class="dropdown-item" 
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                    >
                                    <i class="ft-power"></i> Log Out</span>
                                    </a>
                                </form>
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i class="ft-power"></i> Logout</a> --}}
                            </div>
                        </li>
                        <li class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-gb"></i>
                                <span class="selected-language"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-gb"></i> English</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header">
                    <span data-i18n="nav.dash.main">Main</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Dashboard"></i>
                </li>
                    <li class=" nav-item"><a href="{{ route('user.overview') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a></li>
                    <li class=" navigation-header">
                        <span data-i18n="nav.dash.main">Personal</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Personal"></i>
                    </li>
                    <li class=" nav-item"><a href="{{ route('user.profile') }}"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.user.main">Profile</span></a></li>
                    <x-Sidebar.Notification />
                    <li class=" nav-item"><a href="{{ route('user.plans') }}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.user.main">Plans</span></a></li>
                    <li class=" navigation-header">
                        <span data-i18n="nav.dash.main">Transactions</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Transactions"></i>
                    </li>
                    <li class=" nav-item">
                        <a href="#">
                            <i class="la la-th-list"></i>
                            <span class="menu-title" data-i18n="nav.trans.main">Investments</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('user.transaction.deposit.new') }}" data-i18n="nav.trans.main.d">Deposit</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.deposit.type', ['type' => 'pending']) }}" data-i18n="nav.trans.main.p">Pending</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.deposit.type', ['type' => 'completed']) }}" data-i18n="nav.trans.main.c">Completed</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.deposit.type', ['type' => 'all']) }}" data-i18n="nav.trans.main.a">All</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#">
                            <i class="la la-th-list"></i>
                            <span class="menu-title" data-i18n="nav.trans.exclusive">Exclusive Investments</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('user.transaction.compound.deposit.new') }}" data-i18n="nav.trans.exclusive.d">Deposit</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.compound.deposit.type', ['type' => 'pending']) }}" data-i18n="nav.trans.exclusive.p">Pending</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.compound.deposit.type', ['type' => 'completed']) }}" data-i18n="nav.trans.exclusive.c">Completed</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.compound.deposit.type', ['type' => 'all']) }}" data-i18n="nav.trans.exclusive.a">All</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#">
                            <i class="la la-th-list"></i>
                            <span class="menu-title" data-i18n="nav.trans.withdrawal">Withdrawls</span>
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('user.transaction.withdraw.new') }}" data-i18n="nav.trans.withdrawal.d">Withdraw</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.withdraw.type', ['type' => 'pending']) }}" data-i18n="nav.trans.withdrawal.p">Pending</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.withdraw.type', ['type' => 'completed']) }}" data-i18n="nav.trans.withdrawal.c">Completed</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('user.transaction.withdraw.type', ['type' => 'all']) }}" data-i18n="nav.trans.withdrawal.a">All</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header">
                        <span data-i18n="nav.others.main">Others</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Others"></i>
                    </li>

                    <li class=" nav-item"><a href="{{ route('user.contact.new') }}"><i class="la la-envelope"></i><span class="menu-title" data-i18n="nav.others.contact">Contact Admin</span></a></li>
                    <li class=" nav-item"><a href="{{ route('user.referrals') }}"><i class="la la-group"></i><span class="menu-title" data-i18n="nav.others.ref">Refferal</span></a></li>
                
                <li class=" nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a 
                            class="waves-effect" 
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                        >
                        <i class="la la-lock"></i><span class="menu-title" data-i18n="nav.others.main">Log Out</span>
                        </a>
                    </form>
                    {{-- <a href="{{ route('logout') }}"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.others.main">Log Out</span></a></li> --}}
            </ul>

            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item col-12 text-center">
                        <a class="navbar-brand" href="{{ route('user.overview') }}">
                            <img class="brand-logo" alt="modern admin logo" src="{{ asset(config('settings.site.logo.full')) }}" style="width: 100px;">
                            <h3 class="brand-text">{{ config('settings.site.name') }}</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>