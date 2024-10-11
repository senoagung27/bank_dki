@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div data-v-bbefe8d0="" class="d-flex flex-wrap justify-start justify-sm-space-between gap-y-4 gap-x-6 mb-6">
                <div data-v-bbefe8d0="" class="d-flex flex-column justify-center">
                    <h4 data-v-bbefe8d0="" class="text-h4 font-weight-medium"> Master Data Pekerjaan </h4>
                    <div data-v-bbefe8d0="" class="text-body-1 mb-3"> List Data Pekerjaan </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-header demo-inline-spacing">
                                    <a href="{{ route('job.create') }}" class="btn btn-primary text-white">
                                        <span class="ti ti-plus"></span> Add Job
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-5 gap-md-4 mt-n6 mt-md-0">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31"><i
                                            class="ti ti-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search..."
                                        aria-label="Search..." aria-describedby="basic-addon-search31" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pekerjaan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $job->id }}</td>
                                            <td>{{ $job->job_name }}</td>
                                            <td>
                                                <a href="{{ route('job.edit', $job) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('job.destroy', $job) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-backdrop fade"></div>
        </div>
    </div>
@endsection
