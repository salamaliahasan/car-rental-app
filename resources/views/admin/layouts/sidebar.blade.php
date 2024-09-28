<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cars*') ? 'active' : '' }}"
                    href="{{ route('admin.cars.index') }}">
                    <i class="bi bi-car-front-fill"></i>
                    Manage Cars
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/rentals*') ? 'active' : '' }}"
                    href="{{ route('admin.rentals.index') }}">
                    <i class="bi bi-file-earmark-text"></i>
                    Manage Rentals
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/customers*') ? 'active' : '' }}"
                    href="{{ route('admin.customers.index') }}">
                    <i class="bi bi-people-fill"></i>
                    Manage Customers
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/reports*') ? 'active' : '' }}"
                    href="{{ route('admin.reports.index') }}">
                    <i class="bi bi-bar-chart-fill"></i>
                    Reports
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.settings') }}">
                    <i class="bi bi-gear-fill"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>
