@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/profil') }}"
                        class="text-dark">Profil</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 rounded px-5 py-3 shadow col-sm-12">
            <h4 class="text-center fw-bold mb-4">Profil</h4>
            @if (auth()->user()->url_ktp)
                <img src="{{ asset('storage/' . auth()->user()->url_ktp) }}" class="img-fluid d-flex mx-auto rounded">
            @else
                <div class="text-center">Foto KTP terverifikasi belum ada</div>
            @endif
            @include('components.list-profil')
        </div>
        <div class="col-lg-6 col-sm-12 px-5 py-3">
            <h4 class="text-center fw-bold mb-4">Edit Data Profil</h3>
                <form action="{{ route('profil.update', auth()->user()->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <h5 class="fw-bold mb-4">I. Data Pribadi</h5>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="nama">Nama Anda*</label>
                            <input disabled class="form-control @error('nama') is-invalid @enderror" name="nama"
                                id="nama" value="{{ old('nama', auth()->user()->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="email">Email*</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email', auth()->user()->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="nik">NIK*</label>
                            <input disabled class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik"
                                value="{{ old('nik', auth()->user()->nik) }}">
                            @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="alamat">Alamat*</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                id="alamat" value="{{ old('alamat', auth()->user()->alamat) }}">
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col-4">
                            <label for="no_telp">No. Telpon*</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                id="no_telp" value="{{ old('no_telp', auth()->user()->no_telp) }}">
                            @error('no_telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h4 class="fw-bold mb-4">II. Profil Usaha</h4>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="nama_usaha">Nama Usaha*</label>
                            <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror"
                                name="nama_usaha" id="nama_usaha"
                                value="{{ old('nama_usaha', auth()->user()->nama_usaha) }}">
                            @error('nama_usaha')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tenaga_tetap">Tenaga Kerja Tetap*</label>
                            <input type="text" class="form-control @error('tenaga_tetap') is-invalid @enderror"
                                name="tenaga_tetap" id="tenaga_tetap"
                                value="{{ old('tenaga_tetap', auth()->user()->tenaga_tetap) }}">
                            @error('tenaga_tetap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="npwp">NPWP*</label>
                            <input type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                id="npwp" value="{{ old('npwp', auth()->user()->npwp) }}">
                            @error('npwp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tenaga_tidak_tetap">Tenaga Kerja Tidak Tetap*</label>
                            <input type="text" class="form-control @error('tenaga_tidak_tetap') is-invalid @enderror"
                                name="tenaga_tidak_tetap" id="tenaga_tidak_tetap"
                                value="{{ old('tenaga_tidak_tetap', auth()->user()->tenaga_tidak_tetap) }}">
                            @error('tenaga_tidak_tetap')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="no_iumk">No IUMK*</label>
                            <input type="text" class="form-control @error('no_iumk') is-invalid @enderror" name="no_iumk"
                                id="no_iumk" value="{{ old('no_iumk', auth()->user()->no_iumk) }}">
                            @error('no_iumk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tenaga_tidak_bayar">Tenaga Tidak Dibayar*</label>
                            <input type="text" class="form-control @error('tenaga_tidak_bayar') is-invalid @enderror"
                                name="tenaga_tidak_bayar" id="tenaga_tidak_bayar"
                                value="{{ old('tenaga_tidak_bayar', auth()->user()->tenaga_tidak_bayar) }}">
                            @error('tenaga_tidak_bayar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="no_siup">No SIUP*</label>
                            <input type="text" class="form-control @error('no_siup') is-invalid @enderror" name="no_siup"
                                id="no_siup" value="{{ old('no_siup', auth()->user()->no_siup) }}">
                            @error('no_siup')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="kapasitas_produksi">Kapasitas Produksi*</label>
                            <input type="text" class="form-control @error('kapasitas_produksi') is-invalid @enderror"
                                name="kapasitas_produksi" id="kapasitas_produksi"
                                value="{{ old('kapasitas_produksi', auth()->user()->kapasitas_produksi) }}">
                            @error('kapasitas_produksi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="no_tdp">No TDP*</label>
                            <input type="text" class="form-control @error('no_tdp') is-invalid @enderror" name="no_tdp"
                                id="no_tdp" value="{{ old('no_tdp', auth()->user()->no_tdp) }}">
                            @error('no_tdp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="harga_satuan">Harga Satuan*</label>
                            <input type="text" class="form-control @error('harga_satuan') is-invalid @enderror"
                                name="harga_satuan" id="harga_satuan"
                                value="{{ old('harga_satuan', auth()->user()->harga_satuan) }}">
                            @error('harga_satuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="tgl_mulai">Tgl Mulai Usaha*</label>
                            <input type="date" class="form-control @error('tgl_mulai') is-invalid @enderror"
                                name="tgl_mulai" id="tgl_mulai"
                                value="{{ old('tgl_mulai', auth()->user()->tgl_mulai) }}">
                            @error('tgl_mulai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="omzet">Omzet Per Tahun*</label>
                            <input type="text" class="form-control @error('omzet') is-invalid @enderror" name="omzet"
                                id="omzet" value="{{ old('omzet', auth()->user()->omzet) }}">
                            @error('omzet')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col">
                            <label for="sektor_usaha">Sektor Usaha*</label>
                            <input type="text" class="form-control @error('sektor_usaha') is-invalid @enderror"
                                name="sektor_usaha" id="sektor_usaha"
                                value="{{ old('sektor_usaha', auth()->user()->sektor_usaha) }}">
                            @error('sektor_usaha')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="modal_sendiri">Jumlah Modal Sendiri*</label>
                            <input type="text" class="form-control @error('modal_sendiri') is-invalid @enderror"
                                name="modal_sendiri" id="modal_sendiri"
                                value="{{ old('modal_sendiri', auth()->user()->modal_sendiri) }}">
                            @error('modal_sendiri')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success d-block py-2" style="width: 140px; float:right;">Edit
                        Data</button>
                </form>

                <form action="{{ url('dashboard/profil/verif-ktp/' . auth()->user()->id) }}" method="post"
                    enctype="multipart/form-data" id="verify-ktp">
                    @method('put')
                    @csrf
                    <div class="d-block">
                        <div class="form-group row mb-4 mt-3">
                            <input type=" text" class="form-control" disabled value="{{ auth()->user()->status }}"
                                name="status">
                        </div>
                        <div class="form-group row mb-4 ">
                            <div class="col-6">
                                <label for="url_ktp">Input KTP (.jpg/.png/.jpeg max: 4096kb)</label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('url_ktp') is-invalid @enderror"
                                        id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="url_ktp"
                                        aria-label="Upload"
                                        {{ auth()->user()->status == 'Sudah Diverifikasi' ? 'disabled' : '' }}>
                                </div>
                                @error('url_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"
                            {{ auth()->user()->status == 'Sudah Diverifikasi' ? 'disabled' : '' }}>Verifikasi</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
