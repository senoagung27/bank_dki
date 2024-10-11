@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-header demo-inline-spacing">
                                <a href="{{ route('customers.create') }}" type="button" class="btn btn-primary text-white">
                                    <span class="fas fa-plus"></span> Pengajuan Baru
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-5 gap-md-4 mt-n6 mt-md-0">
                            <select id="selectpickerBasic" class="selectpicker" data-style="btn-default">
                                <option>Name</option>
                                <option>Status</option>
                                <option>Gender</option>
                            </select>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text" id="basic-addon-search31"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-header">Customer Data</h5>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20%;">Nama</th>
                                        <th style="width: 20%;">Tempat, Tanggal Lahir</th>
                                        <th style="width: 10%;">Jenis Kelamin</th>
                                        <th style="width: 15%;">Pekerjaan</th>
                                        <th style="width: 15%;">Alamat</th>
                                        <th style="width: 10%;">Deposit Amount</th>
                                        <th style="width: 5%;">Status</th>
                                        <th style="width: 5%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td style="white-space: nowrap;">{{ $customer->name }}</td>
                                        <td style="white-space: nowrap;">{{ $customer->birth_place }}, {{ \Carbon\Carbon::parse($customer->birth_date)->format('d M Y') }}</td>
                                        <td>{{ $customer->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</td>
                                        <td>{{ $customer->job->job_name }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>Rp {{ number_format($customer->initial_deposit, 0, ',', '.') }}</td>
                                        <td>
                                            @if ($customer->status == 'Menunggu Approval')
                                                <span class="badge bg-warning text-dark">
                                                    <i class="fas fa-hourglass-half"></i> Pending Approval
                                                </span>
                                            @elseif ($customer->status == 'Approved')
                                                <span class="badge bg-gradient-success">
                                                    <i class="fas fa-check-circle"></i> Approved
                                                </span>
                                            @else
                                                <span class="badge bg-gradient-success">
                                                    <i class="fas fa-check-circle"></i> {{ $customer->status }}
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (Auth::user()->roles == 'supervisi')
                                                @if ($customer->status == 'Menunggu Approval')
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#approvalModal{{ $customer->id }}">
                                                        <i class="fas fa-check"></i> Approve
                                                    </button>

                                                    <div class="modal fade" id="approvalModal{{ $customer->id }}" tabindex="-1" aria-labelledby="approvalModalLabel{{ $customer->id }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="approvalModalLabel{{ $customer->id }}">Approval Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to approve this customer: <strong>{{ $customer->name }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('customers.approve', $customer->id) }}" method="POST">
                                                                        @csrf
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Confirm</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <span class="text-muted">Approved</span>
                                                @endif
                                            @else
                                                @if ($customer->status == 'Menunggu Approval')
                                                    <span class="text-muted">Pending Approval</span>
                                                @else
                                                    <span class="badge bg-gradient-primary">Approve <i class="fas fa-check-circle"></i></span>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination Links -->
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
</div>
@endsection
