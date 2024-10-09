@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- View sales -->
            <div class="col-xl-5 mb-4 col-lg-5 col-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-7">
                            <div class="card-header">
                                <h5 class="card-title mb-2">Welcome Admin! 🎉</h5>
                                <small class="mt-2">Study the past, if you would divine the future.”</small>
                                {{-- <div class="d-flex justify-content-between mb-3">
                                    <h5 class="card-title mb-5">Welcome Admin!</h5>
                                    <small class="mb-2">“Study the past, if you would divine the future.”</small>
                                </div> --}}
                            </div>
                            {{-- <div class="card-body text-nowrap">
                                <h5 class="card-title mb-0">Welcome Admin! 🎉</h5>
                                <p class="mb-2">Study the past, if you would divine the future.”</p>
                                <h4 class="text-primary mb-1">$48.9k</h4>
                                <a href="javascript:;" class="btn btn-primary">View Sales</a>
                            </div> --}}
                        </div>
                        <div class="col-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../../assets/img/illustrations/card-advance-sale.png" height="140"
                                    alt="view sales" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View sales -->

            <!-- Statistics -->
            <div class="col-xl-7 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="card-title mb-0">Statistics</h5>
                            <small class="text-muted">Updated 1 month ago</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-vimeo me-3 p-2">
                                        <i class="ti ti-device-imac"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">15</h5>
                                        <small class="text-light">Total Perangkat</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-success me-3 p-2">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">28</h5>
                                        <small class="text-light">Total Pengguna</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                        <i class="ti ti-clock"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0" id="current-time">--:--:--</h5>
                                        <small class="text-light">Jam Sekarang</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->
            <div class="col-xl-12 mb-4 col-lg-7 col-12">
                <div class="card overflow-hidden">

                    <!-- Map Menu Wrapper -->
                    <div class="d-flex app-logistics-fleet-wrapper">

                        <!-- Map Menu Button when screen is < md -->
                        <div class="flex-shrink-0 position-fixed d-md-none w-auto z-1">
                            <button class="btn btn-white btn-white-dark-variant" data-bs-toggle="sidebar" data-overlay=""
                                data-target="#app-logistics-fleet-sidebar"><i class="ti ti-menu-2 ti-md"></i></button>
                        </div>

                        <!-- Map Menu -->
                        <div class="app-logistics-fleet-sidebar" id="app-logistics-fleet-sidebar">
                            <div class="card-header border-0 d-flex justify-content-between">
                                <h5 class="mb-0 card-title">Perangkat</h5>
                                <!-- Sidebar close button -->
                                <i class="ti ti-x ti-xs cursor-pointer close-sidebar d-md-none btn btn-sm btn-icon btn-text-secondary rounded-pill p-0"
                                    data-bs-toggle="sidebar" data-overlay data-target="#app-logistics-fleet-sidebar"></i>
                            </div>
                            <div class="mb-2">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="ti ti-search"></i></span>
                                    <input type="text" id="basic-icon-default-company" class="form-control"
                                        placeholder="Pencarian" />
                                </div>
                            </div>
                            <!-- Sidebar when screen < md -->
                            <div class="card-body p-0 logistics-fleet-sidebar-body overflow-scroll">
                                <!-- Menu Accordion -->
                                <div class="accordion py-2 px-1" id="fleet" data-bs-toggle="sidebar" data-overlay
                                    data-target="#app-logistics-fleet-sidebar">
                                    <!-- Fleet 1 -->
                                    <div class="accordion-item border-0 active mb-0 shadow-none" id="fl-1">
                                        <div class="accordion-header" id="fleetOne">
                                            <div role="button" data-bs-toggle="collapse" data-bs-target="#fleet1"
                                                aria-expanded="true" aria-controls="fleet1">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-4">
                                                            <span class="avatar-initial rounded-circle bg-label-success">
                                                                <i class="ti ti-ripple ti-lg"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="d-flex flex-column gap-1">
                                                        <span class="text-heading">CIKOLEAR HULU</span>
                                                        <small class="text-light">14:00 WIB - 0.00 cm</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fleet 2 -->
                                    <div class="accordion-item border-0 mb-0 shadow-none" id="fl-2">
                                        <div class="accordion-header" id="fleetTwo">
                                            {{-- <div role="button"
                                            class="accordion-button"
                                            data-bs-toggle="collapse" data-bs-target="#fleet2" aria-expanded="true"
                                            aria-controls="fleet2"> --}}
                                            <div role="button" data-bs-toggle="collapse" data-bs-target="#fleet2"
                                                aria-expanded="true" aria-controls="fleet2">

                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-4">
                                                            <span class="avatar-initial rounded-circle bg-label-success">
                                                                {{-- <i class="ti ti-car ti-lg"></i> --}}
                                                                <i class="ti ti-ripple ti-lg"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="d-flex flex-column gap-1">
                                                        <span class="text-heading">RANCA SUMUR 2</span>
                                                        <small class="text-light">14:00 WIB - 0.00 cm</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fleet2" class="accordion-collapse collapse" data-bs-parent="#fleet">
                                        </div>
                                    </div>
                                    <!-- Fleet 3 -->
                                    <div class="accordion-item border-0 mb-0 shadow-none" id="fl-3">
                                        <div class="accordion-header" id="fleetThree">
                                            <div role="button" data-bs-toggle="collapse" data-bs-target="#fleet3"
                                                aria-expanded="true" aria-controls="fleet3">

                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-4">
                                                            <span class="avatar-initial rounded-circle bg-label-success">
                                                                <i class="ti ti-ripple ti-lg"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="d-flex flex-column gap-1">
                                                        <span class="text-heading">CIPAYAEUN</span>
                                                        <small class="text-light">14:00 WIB - 0.00 cm</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fleet3" class="accordion-collapse collapse" data-bs-parent="#fleet">
                                        </div>
                                    </div>
                                    <!-- Fleet 4 -->
                                    <div class="accordion-item border-0 mb-4 shadow-none" id="fl-4">
                                        <div class="accordion-header" id="fleetFour">
                                            <div role="button" data-bs-toggle="collapse" data-bs-target="#fleet4"
                                                aria-expanded="true" aria-controls="fleet4">

                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-4">
                                                            <span class="avatar-initial rounded-circle bg-label-success">
                                                                <i class="ti ti-ripple ti-lg"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="d-flex flex-column gap-1">
                                                        <span class="text-heading">CIPAYAEUN</span>
                                                        <small class="text-light">14:00 WIB - 0.00 cm</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fleet4" class="accordion-collapse collapse" data-bs-parent="#fleet">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mapbox Map container -->
                        <div class="col h-100 map-container">
                            <!-- Map -->
                            <div id="map" class="h-100 w-100"></div>
                        </div>

                        <!-- Overlay Hidden -->
                        <div class="app-overlay d-none"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Ketinggian Air RANCA SUMUR 2</h5>
                            <small class="card-subtitle my-0 text-light"><span class="text-success">21.16 cm </span>
                                Berdasarkan hari ini jam 14.30</small>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="ti ti-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Today</a></li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="lineAreaChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-4 col-lg-7 col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="text-center">
                            <h5 class="card-title mb-0">Ketinggan Air</h5>
                            <p class="card-subtitle my-0 text-success">21.16 cm</p>
                        </div>
                        <div class="dropdown d-none d-sm-flex">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="ti ti-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Today</a></li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donutChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-4 col-lg-7 col-12">
                <div class="card">
                    <div class="card-header header-elements">
                        <h5 class="card-title mb-0">Rata Rata RANCA SUMUR 2</h5>
                        <div class="card-action-element ms-auto py-0">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="ti ti-calendar"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a href="javascript:void(0);"
                                            class="dropdown-item d-flex align-items-center">Today</a></li>
                                    <li><a href="javascript:void(0);"
                                            class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                            7 Days</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                            30 Days</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a href="javascript:void(0);"
                                            class="dropdown-item d-flex align-items-center">Current Month</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                            Month</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart" class="chartjs" data-height="400"></canvas>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <!-- / Content -->
    <script>
        function updateTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const currentTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('current-time').textContent = currentTime;
        }

        updateTime();
        setInterval(updateTime, 1000);
    </script>

@endsection
