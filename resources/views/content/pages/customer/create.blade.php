@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <h2>Tambah Customer Baru</h2> --}}
        <h1 class="text-xl-right">
            <i class="fas fa-user"></i>  Pengajuan Customer Baru
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
        @endif

        @if (isset($existingCustomer))
            <div class="alert alert-warning">
                Data customer dengan nama <strong>{{ $existingCustomer->name }}</strong> sudah ada!
            </div>
        @endif
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="mb-3">
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>  Kembali
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title">Form Customer Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST" class="form form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="name">Nama</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" id="name" class="form-control" name="name"
                                                placeholder="Nama" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="birth_place">Tempat Lahir</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            <input type="text" id="birth_place" class="form-control" name="birth_place"
                                                placeholder="Tempat Lahir" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="birth_date">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            <input type="text" id="birth_date" class="form-control" name="birth_date"
                                                placeholder="Tanggal Lahir" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="gender">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                            <select class="form-control" name="gender" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="male">Laki-laki</option>
                                                <option value="female">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="job_id">Pekerjaan</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            <select class="form-control" id="job_id" name="job_id" required>
                                                <option value="">Pilih Pekerjaan</option>
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="address">Alamat</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <textarea id="address" class="form-control" name="address" placeholder="Alamat" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="province_id">Provinsi</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                                            <select class="form-control" id="province_id" name="province_id" required>
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="city_id">Kota/Kabupaten</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            <select class="form-control" id="city_id" name="city_id" required>
                                                <option value="">Pilih Kota/Kabupaten</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="district_id">Kecamatan</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                                            <select class="form-control" id="district_id" name="district_id" required>
                                                <option value="">Pilih Kecamatan</option>
                                                @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="village_id">Kelurahan</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <select class="form-control" id="village_id" name="village_id" required>
                                                <option value="">Pilih Kelurahan</option>
                                                @foreach ($villages as $village)
                                                    <option value="{{ $village->id }}">{{ $village->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="address_street">Nama Jalan</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-road"></i></span>
                                            <input type="text" id="address_street" class="form-control" name="address_street"
                                                placeholder="Nama Jalan" required />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="address_rt">RT</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input type="text" id="address_rt" class="form-control" name="address_rt"
                                                placeholder="RT" required />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="address_rw">RW</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input type="text" id="address_rw" class="form-control" name="address_rw"
                                                placeholder="RW" required />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            
                            <div class="col-12">
                                <div class="mb-1 row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label" for="initial_deposit">Nominal Setor</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                            <input type="number" id="initial_deposit" class="form-control"
                                                name="initial_deposit" placeholder="Nominal Setor" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#birth_date", {
                dateFormat: "Y-m-d",
                locale: {
                    firstDayOfWeek: 1
                },
                allowInput: true
            });
        });
    </script>
@endsection
