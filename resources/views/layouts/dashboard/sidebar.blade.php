
            <ul class="metismenu list-unstyled" id="side-menu">
                @if(Auth::user()->admin)
                    <li>
                        <a href="{{ route('admin.overview') }}" class="waves-effect">
                            <i class="mdi mdi-home-variant-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile') }}" class=" waves-effect">
                            <i class="mdi mdi-account"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <x-Sidebar.Notification />
                    <li class="menu-title">Users</li>
                    <li>
                        <a href="{{ route('admin.users.add') }}" class=" waves-effect">
                            <i class="mdi mdi-account-group"></i>
                            <span>Add User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.all', ['type' => 'users']) }}" class=" waves-effect">
                            <i class="mdi mdi-account-edit-outline"></i>
                            <span>View Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.all', ['type' => 'admins']) }}" class=" waves-effect">
                            <i class="mdi mdi-account-cowboy-hat"></i>
                            <span>View Admin</span>
                        </a>
                    </li>
                    <x-Admin.Sidebar.Plans />
                    
                    <x-Admin.Sidebar.Currency />
                    
                    
                    <li class="menu-title">Transactions</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-up-circle"></i>
                            <span>Investments</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.transaction.deposit.new') }}">Deposit</a></li>
                            <li><a href="{{ route('admin.transaction.deposit.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('admin.transaction.deposit.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('admin.transaction.deposit.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-up-circle"></i>
                            <span>Compound Investments</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.transaction.compound.new') }}">Deposit</a></li>
                            <li><a href="{{ route('admin.transaction.compound.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('admin.transaction.compound.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('admin.transaction.compound.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-down-circle"></i>
                            <span>Withdrawals</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.transaction.withdraw.new') }}">Withdraw</a></li>
                            <li><a href="{{ route('admin.transaction.withdraw.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('admin.transaction.withdraw.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('admin.transaction.withdraw.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Contacts</li>
                    <li>
                        <a href="{{ route('admin.contact.all') }}" class=" waves-effect">
                            <i class="mdi mdi-email-edit"></i>
                            <span>Tickets</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#--1 BASE_URL . '/dashboard/admin/tickets.php?n=true'; ?>" class=" waves-effect">
                            <i class="mdi mdi-email-edit"></i>
                            <span>Non User Tickets</span>
                        </a>
                    </li> --}}
                    <li class="menu-title">Mails</li>

                    <li>
                        <a href="{{ route('admin.mail.add') }}" class=" waves-effect">
                            <i class="mdi mdi-email-plus"></i>
                            <span>Add Template</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.mail.index') }}" class="waves-effect">
                            <i class="mdi mdi-card-account-mail-outline"></i>
                            <span>All Template</span>
                        </a>
                    </li>
                    <li class="menu-title">Others</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-blogger"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.posts.add') }}">Add Post</a></li>
                            <li><a href="{{ route('admin.categories.add') }}">Add  Categories</a></li>
                            <li><a href="{{ route('admin.categories.all') }}">All Categories</a></li>
                            <li><a href="{{ route('admin.posts.all') }}">All Posts</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Settings</li>
                    <li>
                        <a href="{{ route('admin.settings.calculator.index') }}" class="waves-effect">
                            <i class="mdi mdi-card-account-mail-outline"></i>
                            <span>Calculator</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-blogger"></i>
                            <span>Site</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.settings.site.teams.all') }}">Teams</a></li>
                            <li><a href="{{ route('admin.settings.site.reviews.all') }}">Reviews</a></li>
                            <li><a href="{{ route('admin.settings.site.faq.all') }}">FAQs</a></li>
                        </ul>
                    </li>
                @else
                    <li class="menu-title">Menu</li>
                    
                    <li>
                        <a href="{{ route('user.overview') }}" class="waves-effect">
                            <i class="mdi mdi-home-variant-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.profile') }}" class=" waves-effect">
                            <i class="mdi mdi-account"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                    <x-Sidebar.Notification />

                    <li class="menu-title">Transactions</li>
                    <li>
                        <a href="{{ route('user.plans') }}" class=" waves-effect">
                            <i class="mdi mdi-align-vertical-bottom"></i>
                            <span>Plans</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-up-circle"></i>
                            <span>Investments</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('user.transaction.deposit.new') }}">Deposit</a></li>
                            <li><a href="{{ route('user.transaction.deposit.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('user.transaction.deposit.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('user.transaction.deposit.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-up-circle"></i>
                            <span>Exclusive Investments</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('user.transaction.compound.deposit.new') }}">Invest</a></li>
                            <li><a href="{{ route('user.transaction.compound.deposit.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('user.transaction.compound.deposit.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('user.transaction.compound.deposit.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-arrow-down-circle"></i>
                            <span>Withdrawals</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('user.transaction.withdraw.new') }}">Withdraw</a></li>
                            <li><a href="{{ route('user.transaction.withdraw.type', ['type' => 'pending']) }}">Pending</a></li>
                            <li><a href="{{ route('user.transaction.withdraw.type', ['type' => 'completed']) }}">Completed</a></li>
                            <li><a href="{{ route('user.transaction.withdraw.type', ['type' => 'all']) }}">All</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Contact</li>
                    <li>
                        <a href="{{ route('user.contact.new') }}" class=" waves-effect">
                            <i class="mdi mdi-email-edit"></i>
                            <span>Ticket</span>
                        </a>
                    </li>

                    <li class="menu-title">Others</li>
                    <li>
                        <a href="{{ route('user.referrals') }}" class=" waves-effect">
                            <i class="mdi mdi-account-group"></i>
                            <span>Referrals</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#--1 BASE_URL . '/dashboard/'; ?>about.php" class=" waves-effect">
                            <i class="fa fa-certificate"></i>
                            <span>Certification</span>
                        </a>
                    </li> --}}

                   
                @endif
                
                <li class="menu-title">Language</li>
                    <li>
                        <div id="google_translate_element"></div>
                    </li>
                    
                    <li class="menu-title">Logout</li>
                 <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a 
                                class="waves-effect" 
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"
                            >
                            <i class="mdi mdi-logout-variant"></i> {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
