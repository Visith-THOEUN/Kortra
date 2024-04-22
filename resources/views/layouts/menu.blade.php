{{-- <li class="nav-item">
    <a href="{{ route('admin.home') }}" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
        <i class="fas fa-house-user"></i>
        <p>Home</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-house-user"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('events.index') }}"
        class="nav-link {{ Request::is('admin/events') || Request::is('admin/events/*') ? 'active' : '' }}">
        <i class="fas fa-calendar-week"></i>
        <p>Event</p>
    </a>
</li>

{{--<li class="nav-item">--}}
{{--    <a href="{{ route('guests.index') }}"--}}
{{--        class="nav-link {{ Request::is('admin/guests') || Request::is('admin/guests/*') ? 'active' : '' }}">--}}
{{--        <i class="fas fa-users"></i>--}}
{{--        <p>Guest</p>--}}
{{--    </a>--}}
{{--</li>--}}

<li class="nav-item">
    <a href="{{ route('users.index') }}"
        class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/*') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>User</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('groups.index') }}"
        class="nav-link {{ Request::is('admin/groups') || Request::is('admin/groups/*') ? 'active' : '' }}">
        <i class="fas fa-user-friends"></i>
        <p>Groups</p>
    </a>
</li>
