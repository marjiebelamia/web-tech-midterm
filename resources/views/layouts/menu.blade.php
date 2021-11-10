

<li class="nav-item">
    <a href="{{ route('faceBookUsers.index') }}"
       class="nav-link {{ Request::is('faceBookUsers*') ? 'active' : '' }}">
        <p>Face Book Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


