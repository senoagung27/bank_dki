@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- View sales -->
            <div class="col-xl-4 mb-4 col-lg-5 col-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-8">
                            <div class="card-header">
                                <h5 class="card-title mb-2 text-wrap">Welcome {{ Auth::user()->name }}!</h5>
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
                        <div class="col-4 text-center text-sm-left">
                            <div class="card-body pb-0 px-0">
                                <img src="../../assets/img/illustrations/card-advance-sale.png" height="140"
                                    alt="view sales" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View sales -->

            <!-- Statistics -->
            <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="card-title mb-0">Statistics</h5>
                            <small class="text-muted">Updated 1 month ago</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                        <i class="ti ti-user"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">4</h5>
                                        <small>Total Pelanggan</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-info me-3 p-2">
                                        <i class="ti ti-sitemap"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">1</h5>
                                        <small>Total Reseller</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                        <i class="ti ti-device-imac"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">15</h5>
                                        <small>Total Perangkat</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-success me-3 p-2">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">28</h5>
                                        <small>Total Pengguna</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Pelanggan</h5>
                        <small class="text-light card-subtitle">Daftar Pelanggan</small>
                    </div>
                    <div class="mb-6">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="ti ti-search"></i></span>
                            <input type="text" id="basic-icon-default-company" class="form-control"
                                placeholder="Pencarian" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-6 col-xxl-4 mb-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="bg-label-primary rounded text-center mb-4 pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png"
                                            alt="Card girl image" width="140" />
                                    </div>
                                    <h5 class="mb-2">Dinas Bina Marga dan Sumber Daya Air</h5>
                                    <p class="small">Next Generation Frontend Architecture Using Layout Engine And React
                                        Native Web.</p>
                                    <div class="row mb-4 g-3">
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-calendar-event ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">01 Sep 21</h6>
                                                    <small class="small">Tanggal Mulai Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-clock ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">3 Tahun</h6>
                                                    <small>Duration Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard.pelanggan') }}" class="btn btn-primary w-100">Pilih</a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6 col-xxl-4 mb-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="bg-label-primary rounded text-center mb-4 pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png"
                                            alt="Card girl image" width="140" />
                                    </div>
                                    <h5 class="mb-2">
                                        <span class="text-truncate d-inline-block" style="max-width: 200px;" title="Dinas Bina Marga dan Sumber Daya Air">
                                            Dinas Bina Marga dan Sumber Daya Air
                                        </span>
                                    </h5>
                                    <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                                    <div class="row mb-4 g-3">
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-calendar-event ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">01 Sep 21</h6>
                                                    <small class="small">Tanggal Mulai Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-clock ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">3 Tahun</h6>
                                                    <small>Duration Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard.pelanggan') }}" class="btn btn-primary w-100">Pilih</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-xxl-4 mb-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="bg-label-primary rounded text-center mb-4 pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png"
                                            alt="Card girl image" width="140" />
                                    </div>
                                    <h5 class="mb-2">Krakatau Smart</h5>
                                    <p class="small">Next Generation Frontend Architecture Using Layout Engine And React
                                        Native Web.</p>
                                    <div class="row mb-4 g-3">
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-calendar-event ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">17 Nov 24</h6>
                                                    <small>Tanggal Mulai Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-clock ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">2 Tahun</h6>
                                                    <small>Duration Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard.pelanggan') }}" class="btn btn-primary w-100">Pilih</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4 mb-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="bg-label-primary rounded text-center mb-4 pt-4">
                                        <img class="img-fluid" src="../../assets/img/illustrations/girl-with-laptop.png"
                                            alt="Card girl image" width="140" />
                                    </div>
                                    <h5 class="mb-2">Nusa Network Prakarsa</h5>
                                    <p class="small">Next Generation Frontend Architecture Using Layout Engine And React
                                        Native Web.</p>
                                    <div class="row mb-4 g-3">
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-calendar-event ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                                    <small>Tanggal Mulai Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="ti ti-clock ti-28px"></i></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-nowrap">2 Tahun</h6>
                                                    <small>Duration Kontrak</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard.pelanggan') }}" class="btn btn-primary w-100">Pilih</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="demo-inline-spacing">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item prev">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon ti ti-chevrons-left ti-xs"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">..</a>
                                        </li>
                                        <li class="page-item next">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon ti ti-chevrons-right ti-xs"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

@endsection
