@extends('layouts.app')

@section('title', 'Roles List')

@section('content')

    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="mb-4">Roles List</h4>

            <p class="mb-4">
                A role provides access to predefined menus and features. Depending on the assigned role, an administrator can have access to what a user needs.
            </p>

            <!-- Role cards -->
            <div class="row g-4">
                @foreach ($roles as $role)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal mb-2">Total {{ $role->user_count }} users</h6>
                                    <!-- Dummy avatar images -->
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <!-- You can replace this with dynamic user data if needed -->
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="User 1" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="User 2" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../assets/img/avatars/2.png" alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1">
                                    <div class="role-heading">
                                        <h4 class="mb-1">{{ $role->name }}</h4>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                            class="role-edit-modal"><span>Edit Role</span></a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-muted"><i class="ti ti-copy ti-md"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card h-100">
                        <div class="row h-100">
                            <div class="col-sm-5">
                                <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                    <img src="../../assets/img/illustrations/add-new-roles.png"
                                        class="img-fluid mt-sm-4 mt-md-0" alt="add-new-roles" width="83" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body text-sm-end text-center ps-sm-0">
                                    <button data-bs-target="#addRoleModal" data-bs-toggle="modal"
                                        class="btn btn-primary mb-2 text-nowrap add-new-role">
                                        Add New Role
                                    </button>
                                    <p class="mb-0 mt-1">Add role, if it does not exist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Role Table -->
                    <div class="card">
                        <div class="card-datatable table-responsive">
                            <table class="datatables-users table border-top">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <th>Guard Name</th>
                                        <th>Total Users</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            <td>{{ $role->user_count }}</td>
                                                <td>
                                                    <a href="{{ route('edit-roles', $role->id) }}" class="btn btn-sm btn-warning">
                                                        <i class="ti ti-pencil"></i> Edit
                                                    </a>
                                                    <a href="{{ route('delete-roles', $role->id) }}" class="btn btn-sm btn-danger">
                                                        <i class="ti ti-trash"></i> Delete
                                                    </a>
                                                </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Role Table -->
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>

@endsection
