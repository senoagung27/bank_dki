<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- Logo SVG Here -->
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Transaksi">Transaksi</span>
        </li>

        <!-- Master Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-credit-card"></i>
                <div data-i18n="Transaksi">Transaksi</div>
            </a>
            <ul class="menu-sub">
                <!-- Other Master Data Items -->

                <!-- Role & Permissions Menu -->
                <li class="{{ request()->is('roles*') ? 'active' : '' }}">
                    <a href="{{ route('customers.index') }}" class="menu-link">
                        <div data-i18n="Pebukaan Rekening Baru">Pembukaan Rekening Baru</div>
                    </a>
                </li>
            </ul>
        </li>
        @if(auth()->user()->roles == 'super_admin')
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Master Data">Master Data</span>
        </li>
       
        <!-- Master Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-sitemap"></i>
                <div data-i18n="Master Data">Master Data</div>
            </a>
            <ul class="menu-sub">
                <!-- Other Master Data Items -->

                <!-- Role & Permissions Menu -->

                <li class="{{ request()->is('roles*') ? 'active' : '' }}">
                    <a href="{{ route('job.index') }}" class="menu-link">
                        <div data-i18n="Pekerjaan">Pekerjaan</div>
                    </a>
                </li>
                <li class="{{ request()->is('roles*') ? 'active' : '' }}">
                    <a href="{{ route('index-roles') }}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="{{ request()->is('permission*') ? 'active' : '' }}">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Permissions">Permissions</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
</aside>
