@extends('layouts.app')

@section('title', 'Edit Register')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Register</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Register</a></div>
                    <div class="breadcrumb-item">Edit Register</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('register.update', $register) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Register</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text"
                                    class="form-control @error('nama_lengkap')
                                    is-invalid
                                @enderror"
                                    name="nama_lengkap" value="{{ $register->nama_lengkap }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <input type="text"
                                    class="form-control @error('nama_panggilan')
                                    is-invalid
                                @enderror"
                                    name="nama_panggilan" value="{{ $register->nama_panggilan }}">
                                @error('nama_panggilan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat/Tanggal Lahir</label>
                                <input type="text"
                                    class="form-control @error('ttl')
                                    is-invalid
                                @enderror"
                                    name="ttl" value="{{ $register->ttl }}">
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat Asal</label>
                                <input type="text"
                                    class="form-control @error('alamat_asal')
                                    is-invalid
                                @enderror"
                                    name="alamat_asal" value="{{ $register->alamat_asal }}">
                                @error('alamat_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat di Banjarmasin</label>
                                <input type="text"
                                    class="form-control @error('alamat_banjarmasin')
                                    is-invalid
                                @enderror"
                                    name="alamat_banjarmasin" value="{{ $register->alamat_banjarmasin }}">
                                @error('alamat_banjarmasin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" value="{{ $register->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Motivasi</label>
                                <input type="text"
                                    class="form-control @error('motivasi')
                                    is-invalid
                                @enderror"
                                    name="motivasi" value="{{ $register->motivasi }}">
                                @error('motivasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pengalaman Organisasi</label>
                                <input type="text"
                                    class="form-control @error('pengalaman_organisasi')
                                    is-invalid
                                @enderror"
                                    name="pengalaman_organisasi" value="{{ $register->pengalaman_organisasi }}">
                                @error('pengalaman_organisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pengalaman Kepanitiaan</label>
                                <input type="text"
                                    class="form-control @error('pengalaman_kepanitiaan')
                                    is-invalid
                                @enderror"
                                    name="pengalaman_kepanitiaan" value="{{ $register->pengalaman_kepanitiaan }}">
                                @error('pengalaman_kepanitiaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Motto Hidup</label>
                                <input type="text"
                                    class="form-control @error('motto_hidup')
                                    is-invalid
                                @enderror"
                                    name="motto_hidup" value="{{ $register->motto_hidup }}">
                                @error('motto_hidup')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Divisi yang diinginkan</label>
                                <input type="text"
                                    class="form-control @error('divisi')
                                    is-invalid
                                @enderror"
                                    name="divisi" value="{{ $register->divisi }}">
                                @error('divisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
@endpush
