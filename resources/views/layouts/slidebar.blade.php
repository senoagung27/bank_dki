<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
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
            <span class="menu-header-text" data-i18n="NAVIGATION">NAVIGATION</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-device-desktop"></i>
                <div data-i18n="Perangkat">Perangkat</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <div data-i18n="Monitor Perangkat">Monitor Perangkat</div>
                    </a>
                </li>
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <div data-i18n="Data Perangkat">Data Perangkat</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard-data"></i>
                {{-- <i class="menu-icon tf-icons ti ti-settings"></i> --}}
                <div data-i18n="Laporan">Laporan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-sitemap"></i>
                <div data-i18n="Master Data">Master Data</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-pelanggan') }}" class="menu-link">
                        <div data-i18n="Pelanggan">Pelanggan</div>
                    </a>
                </li>
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <div data-i18n="Penguna">Penguna</div>
                    </a>
                </li>
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <div data-i18n="Grup Sensor">Grup Sensor</div>
                    </a>
                </li>
                <li class="{{ request()->is('users*') ? 'active' : '' }}">
                    <a href="{{ route('index-user') }}" class="menu-link">
                        <div data-i18n="Notifikasi">Notifikasi</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('index-roles') }}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Permission">Permission</div>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Pengaturan">Pengaturan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('index-roles') }}" class="menu-link">
                        <div data-i18n="Ubah Profile">Ubah Profile</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Log Activity">Log Activity</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Informasi">Informasi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Developer Only">Developer Only</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('index-roles') }}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Menu">Menu</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Category Device">Category Device</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Device Param">Device Param</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Log Version">Log Version</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('index-permission') }}" class="menu-link">
                        <div data-i18n="Whatsapp">Whatsapp</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
