<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                    <i class="bi bi-people"></i> Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('admin.settings') ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                    <i class="bi bi-gear"></i> Settings
                </a>
            </li>

            <li class="nav-item">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </li>
        </ul>

    </div>
</nav>
