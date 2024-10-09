@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Invoice List Widget -->
                <div class="col-12 mb-4">
                    <div class="card">
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
                        <div class="card-body">
                            <h5 class="card-header">Data Pelanggan</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomor Telepon</th>
                                            <th>Start Date</th>
                                            <th>Expired Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($data['rows'] as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->company_name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ \Carbon\Carbon::parse($row->start_date)->format('d M Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($row->expired_date)->format('d M Y') }}</td>
                                                <td class="text-nowrap">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <span class="avatar-initial rounded-circle bg-label-hover-success">
                                                            <i class="ti ti-edit ti-md"></i>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow ms-2"
                                                        data-bs-toggle="dropdown">
                                                        <span class="avatar-initial rounded-circle bg-label-hover-info">
                                                            <i class="ti ti-eye ti-md"></i>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow ms-2"
                                                        data-bs-toggle="dropdown">
                                                        <span class="avatar-initial rounded-circle bg-label-hover-danger">
                                                            <i class="ti ti-trash ti-md"></i>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Striped Rows -->
                </div>
            </div>
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>
    </div>
@endsection

