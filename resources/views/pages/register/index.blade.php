@extends('layouts.app')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Register</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Register</a></div>
                    <div class="breadcrumb-item">All Register</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Register</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('register.create') }}" class="btn btn-primary">New Register</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('register.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nama Panggilan</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Alamat Asal</th>
                                            <th>Alamat Banjarmasin</th>
                                            <th>Email</th>
                                            <th>Motivasi</th>
                                            <th>Pengalaman Organisasi</th>
                                            <th>Pengalaman Kepanitiaan</th>
                                            <th>Motto Hidup</th>
                                            <th>Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($registers as $register)
                                            <tr>
                                                <td>
                                                    {{ $register->id }}
                                                </td>
                                                <td>
                                                    {{ $register->nama_lengkap }}
                                                </td>
                                                <td>
                                                    {{ $register->nama_panggilan }}
                                                </td>
                                                <td>
                                                    {{ $register->ttl }}
                                                </td>
                                                <td>
                                                    {{ $register->alamat_asal }}
                                                </td>
                                                <td>
                                                    {{ $register->alamat_banjarmasin }}
                                                </td>
                                                <td>
                                                    {{ $register->email }}
                                                </td>
                                                <td>
                                                    {{ $register->motivasi }}
                                                </td>
                                                <td>
                                                    {{ $register->pengalaman_organisasi }}
                                                </td>
                                                <td>
                                                    {{ $register->pengalaman_kepanitiaan }}
                                                </td>
                                                <td>
                                                    {{ $register->motto_hidup }}
                                                </td>
                                                <td>
                                                    {{ $register->divisi }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('register.edit', $register->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>Edit
                                                        </a>

                                                        <form action="{{ route('register.destroy', $register->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE"/>
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $registers->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
