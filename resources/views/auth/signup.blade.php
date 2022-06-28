@extends('layouts.main')

@section('content')
    <h3 class="text-center mt-5">Daftar Sebagai Pelaku UMKM</h3>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-9 col-sm-12">
            <form action="{{ url('register') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" name="roles" value="Masyarakat">
                <input type="hidden" name="status" value="Belum Diverifikasi">
                <h5 class="mb-4">I. Account</h5>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="pemilik">Nama Pemilik (Sesuai KTP)*</label>
                        <input type="text" value="{{ old('nama') }}" name="nama" autofocus id="nama"
                            class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="nik">No. KTP*</label>
                        <input type="text" value="{{ old('nik') }}" name="nik" id="nik"
                            class="form-control @error('nik') is-invalid @enderror">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="no_telp">No. Telpon*</label>
                        <input type="text" value="{{ old('no_telp') }}" name="no_telp" id="no_telp"
                            class="form-control @error('no_telp') is-invalid @enderror">
                        @error('no_telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 col-md-sm-12">
                        <label for="password">Password*</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <h5 class="mb-4">II. Analisis Usaha</h5>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="nama_usaha">Nama Usaha*</label>
                        <input type="text" value="{{ old('nama_usaha') }}" name="nama_usaha" id="nama_usaha"
                            class="form-control @error('nama_usaha') is-invalid @enderror">
                        @error('nama_usaha')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="tenaga_tetap">Tenaga Kerja Tetap*</label>
                        <input type="text" value="{{ old('tenaga_tetap') }}" name="tenaga_tetap" id="tenaga_tetap"
                            class="form-control @error('tenaga_tetap') is-invalid @enderror">
                        @error('tenaga_tetap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="npwp">NPWP*</label>
                        <input type="text" name="npwp" value="{{ old('npwp') }}" id="npwp"
                            class="form-control @error('npwp') is-invalid @enderror">
                        @error('npwp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="tenaga_tidak_tetap">Tenaga Kerja Tidak Tetap*</label>
                        <input type="text" value="{{ old('tenaga_tidak_tetap') }}" name="tenaga_tidak_tetap"
                            id="tenaga_tidak_tetap" class="form-control @error('tenaga_tidak_tetap') is-invalid @enderror">
                        @error('tenaga_tidak_tetap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="no_iumk">NIB*</label>
                        <input type="text" value="{{ old('no_iumk') }}" name="no_iumk" id="no_iumk"
                            class="form-control @error('no_iumk') is-invalid @enderror">
                        @error('no_iumk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="tenaga_tidak_dibayar">Tenaga Kerja Tidak Dibayar*</label>
                        <input type="text" value="{{ old('tenaga_tidak_bayar') }}" name="tenaga_tidak_bayar"
                            id="tenaga_tidak_bayar" class="form-control @error('tenaga_tidak_bayar') is-invalid @enderror">
                        @error('tenaga_tidak_bayar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="no_siup">No. SIUP*</label>
                        <input type="text" value="{{ old('no_siup') }}" name="no_siup" id="no_siup"
                            class="form-control @error('no_siup') is-invalid @enderror">
                        @error('no_siup')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="kapasitas_produksi">Kapasitas Produksi*</label>
                        <input type="text" value="{{ old('kapasitas_produksi') }}" name="kapasitas_produksi"
                            id="kapasitas_produksi" class="form-control @error('kapasitas_produksi') is-invalid @enderror">
                        @error('kapasitas_produksi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="no_tdp">No. TDP*</label>
                        <input type="text" value="{{ old('no_tdp') }}" name="no_tdp" id="no_tdp"
                            class="form-control @error('no_tdp') is-invalid @enderror">
                        @error('no_tdp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="harga_satuan">Harga Satuan*</label>
                        <input type="text" value="{{ old('harga_satuan') }}" name="harga_satuan" id="harga_satuan"
                            class="form-control @error('harga_satuan') is-invalid @enderror">
                        @error('harga_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="tgl_mulai">Tgl Mulai Usaha*</label>
                        <input type="date" name="tgl_mulai" id="tgl_mulai"
                            class="form-control @error('tgl_mulai') is-invalid @enderror"
                            value="{{ old('tgl_mulai') }}">
                        @error('tgl_mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="omzet">Omzet Per Tahun*</label>
                        <input type="text" value="{{ old('omzet') }}" name="omzet" id="omzet"
                            class="form-control @error('omzet') is-invalid @enderror">
                        @error('omzet')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="sektor_usaha">Sektor Usaha*</label>
                        <input type="text" value="{{ old('sektor_usaha') }}" name="sektor_usaha" id="sektor_usaha"
                            class="form-control @error('sektor_usaha') is-invalid @enderror">
                        @error('sektor_usaha')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="modal_sendiri">Jumlah Modal Sendiri*</label>
                        <input type="text" value="{{ old('modal_sendiri') }}" name="modal_sendiri" id="modal_sendiri"
                            class="form-control @error('modal_sendiri') is-invalid @enderror">
                        @error('modal_sendiri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="sentra">Sentra*</label>
                        <div class="d-flex">
                            <div class="form-check">
                                <input type="radio" name="sentra" id="sentra" value="Ya" class="form-check-input">
                                <label for="sentra" class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check ml-5">
                                <input type="radio" name="sentra" id="sentra" value="Tidak" class="form-check-input">
                                <label for="sentra" class="form-check-label">Tidak</label>
                            </div>
                        </div>
                        @error('sentra')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="modal_luar">Jumlah Modal Dari Luar*</label>
                        <input type="text" value="{{ old('modal_luar') }}" name="modal_luar" id="modal_luar"
                            class="form-control @error('modal_luar') is-invalid @enderror">
                        @error('modal_luar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md col-md-sm-12">
                        <label for="id_sentra">Id Sentra*</label>
                        <input type="text" value="{{ old('id_sentra') }}" name="id_sentra" id="id_sentra"
                            class="form-control @error('id_sentra') is-invalid @enderror">
                        @error('id_sentra')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="laporan_keuangan">Laporan Keuangan*</label>
                        <div class="d-flex">
                            <div class="form-check">
                                <input type="radio" name="laporan_keuangan" id="laporan_keuangan" value="Ya"
                                    class="form-check-input">
                                <label for="laporan_keuangan" class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check ml-5">
                                <input type="radio" name="laporan_keuangan" id="laporan_keuangan" value="Tidak"
                                    class="form-check-input">
                                <label for="laporan_keuangan" class="form-check-label">Tidak</label>
                            </div>
                        </div>
                        @error('laporan_keuangan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <h5 class="mb-4">III. Profile Usaha</h5>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="alamat">Alamat Jalan*</label>
                        <input type="text" value="{{ old('alamat') }}" name="alamat" id="alamat"
                            class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="jangkauan_pemasaran">Jangkauan Pemasaran*</label>
                        <input type="text" value="{{ old('jangkauan_pemasaran') }}" name="jangkauan_pemasaran"
                            id="jangkauan_pemasaran"
                            class="form-control @error('jangkauan_pemasaran') is-invalid @enderror">
                        @error('jangkauan_pemasaran')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md col-md-sm-12">
                        <label for="kelurahan">Kelurahan/Desa*</label>
                        <input type="text" value="{{ old('kelurahan') }}" name="kelurahan" id="kelurahan"
                            class="form-control @error('kelurahan') is-invalid @enderror">
                        @error('kelurahan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md col-md-sm-12">
                        <label for="pemasaran_online">Pemasaran Online*</label>
                        <input type="text" value="{{ old('pemasaran_online') }}" name="pemasaran_online"
                            id="pemasaran_online" class="form-control @error('pemasaran_online') is-invalid @enderror">
                        @error('pemasaran_online')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-md-sm-12-6">
                        <label for="usaha_utama">Usaha Utama*</label>
                        <input type="text" value="{{ old('usaha_utama') }}" name="usaha_utama" id="usaha_utama"
                            class="form-control @error('usaha_utama') is-invalid @enderror">
                        @error('usaha_utama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-md-sm-12-6">
                        <label for="produk_hasil">Produk Yang Dihasilkan*</label>
                        <input type="text" value="{{ old('produk_hasil') }}" name="produk_hasil" id="produk_hasil"
                            class="form-control @error('produk_hasil') is-invalid @enderror">
                        @error('produk_hasil')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success mt-5 w-50">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
@endsection
