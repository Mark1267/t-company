@if (Auth::user()->admin)
<li>
    <a href="{{ Auth::user()->admin ? route('admin.alerts') : route('user.alerts') }}" class=" waves-effect">
        <i class="mdi mdi-bell"></i>{{-- <span class="badge rounded-pill bg-primary float-end">{{ $notification() }}</span> --}}
        <span>Notifiations</span>
    </a>
</li>
@else
    <li class=" nav-item">
        <a href="{{ route('user.alerts') }}">
            <i class="la la-bell"></i>
            <span class="menu-title" data-i18n="nav.user.main">Notifications</span>
        </a>
        {{-- <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span> --}}
    </li>
@endif