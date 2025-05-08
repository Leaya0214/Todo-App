<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            Admin Panel
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="adminProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name ?? 'Admin' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminProfileDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
