@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Invoice List Widget -->
                <div class="col-xl-12 mb-4 col-lg-5 col-12">
                    <div class="card">
                        {{-- <h5 class="card-header">Striped rows</h5> --}}
                        <div class="row">
                            <div class="col-6">
                                <div class="card-header demo-inline-spacing">

                                    <a href="#" type="button" class="btn btn-primary text-white">
                                        <span class="ti ti-plus"></span>Tambah Data
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-5 gap-md-4 mt-n6 mt-md-0">
                                <select id="selectpickerBasic" class="selectpicker" data-style="btn-default" disabled>
                                    <option>Filter</option>
                                    <option>Rocky</option>
                                    <option>Pulp Fiction</option>
                                    <option>The Godfather</option>
                                </select>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31"><i
                                            class="ti ti-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search..."
                                        aria-label="Search..." aria-describedby="basic-addon-search31" />
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12 mb-4 col-lg-5 col-12">
                            {{-- <div class="col-3">
                                <div class="card-header demo-inline-spacing">
                                    <select class="selectpicker show-tick" id="selectpickerIcons" data-icon-base="ti"
                                        data-tick-icon="ti-check" data-style="btn-default">
                                        <option data-icon="ti ti-brand-instagram">Instagram</option>
                                        <option data-icon="ti ti-brand-pinterest">Pinterest</option>
                                        <option data-icon="ti ti-brand-twitch">Twitch</option>
                                    </select>
                                        <select id="selectpickerBasic" class="selectpicker" data-style="btn-default">
                                          <option>Filter</option>
                                          <option>Rocky</option>
                                          <option>Pulp Fiction</option>
                                          <option>The Godfather</option>
                                        </select>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card-header demo-inline-spacing">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
                                      </div>

                                </div>
                            </div> --}}
                            {{-- <div class="card-datatable table-responsive text-nowrap">
                                <table class="table-responsive border-top">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Telepon</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['rows'] as $row)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->company_name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->start_date }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->start_date)->format('d M Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->expired_date)->format('d M Y') }}</td>

                                        <td>{{ $row->expired_date }}</td>
                                        <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ti ti-pencil me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ti ti-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <p>Total Count: {{ $data['count'] }}</p>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> --}}
                            {{-- <div class="card"> --}}
                            <h5 class="card-header">Data Pelanggan</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Telepon</th>
                                            <th>Nomor Telepon</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        {{-- <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                      </tr> --}}
                                        @foreach ($data['rows'] as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->company_name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                {{-- <td>{{ $row->start_date }}</td> --}}
                                                <td>{{ \Carbon\Carbon::parse($row->start_date)->format('d M Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($row->expired_date)->format('d M Y') }}</td>

                                                {{-- <td>{{ $row->expired_date }}</td> --}}
                                                <td>
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="ti ti-eye"></i>
                                                    </button>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i
                                                                class="ti ti-dots-vertical"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ti ti-pencil me-1"></i> Tambah Perangkat</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ti ti-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- <p>Total Count: {{ $data['count'] }}</p> --}}
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {{-- </div> --}}

                        </div>
                    </div>
                    <!--/ Striped Rows -->
                </div>
            </div>
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>

    @endsection
