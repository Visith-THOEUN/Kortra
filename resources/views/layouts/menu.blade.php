<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
        <i class="fas fa-house-user"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('event') }}" class="nav-link {{ Request::is('admin/event') ? 'active' : '' }}">
        <i class="fas fa-calendar-week"></i>
        <p>Event</p>
    </a>
</li>

<!-- <li class="nav-item">
    <a href="{{ route('plan') }}" class="nav-link {{ Request::is('plan') ? 'active' : '' }}">
        <i class="fas fa-seedling"></i>
        <p>Plan</p>
    </a>
</li> -->
<li class="nav-item">
    <a href="{{ route('guest') }}" class="nav-link {{ Request::is('admin/guest') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>Guest</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('write') }}" class="nav-link {{ Request::is('admin/write') ? 'active' : '' }}">
        <i class="fas fa-pen-alt"></i>
        <p>Write</p>
    </a>
</li>
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
