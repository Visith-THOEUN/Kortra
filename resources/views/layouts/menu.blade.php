<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="fas fa-house-user"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('event') }}" class="nav-link {{ Request::is('event') ? 'active' : '' }}">
        <i class="fas fa-calendar-week"></i>
        <p>Event</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('plan') }}" class="nav-link {{ Request::is('plan') ? 'active' : '' }}">
        <i class="fas fa-seedling"></i>
        <p>Plan</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('guest') }}" class="nav-link {{ Request::is('guest') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>Guest</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('write') }}" class="nav-link {{ Request::is('write') ? 'active' : '' }}">
        <i class="fas fa-pen-alt"></i>
        <p>Write</p>
    </a>
</li>

