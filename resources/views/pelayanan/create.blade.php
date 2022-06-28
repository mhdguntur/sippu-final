@extends('layouts.main')

@section('content')
    <div class="row mt-3">
        <div class="col">
            <p>Home &nbsp;/ <span class="font-weight-bold">Pelayanan</span> &nbsp;</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <h5>Image</h5>
            @if ($pelayanan->url_foto)
                <img src="{{ asset('storage/' . $pelayanan->url_foto) }}" class="img-fluid w-75">
            @else
                <img src="https://source.unsplash.com/random/300x200" alt="">
            @endif
        </div>
        <div class="col-4">
            <h5>Nama Pelayanan</h5>
            <h4 class="mt-5">{{ $pelayanan->judul }}</h4>
        </div>
        <div class="col-4">
            <h5>Jenis</h5>
            <h4 class="mt-5">{{ $pelayanan->jenis }}</h4>
        </div>
    </div>
    <hr width="100%" class="mt-5 mb-3">
    <div class="row">
        <div class="col-lg-10 col-sm-12">
            <h5 style="font-weight: 800" class="mt-5">Pendaftaran Details</h5>
            <form class="mt-3" method="post" action="{{ url('pelayanan/daftar') }}">
                @csrf
                <input type="hidden" name="status_pendaftaran" value="Belum Dilaksanakan">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="pelayanan_id" value="{{ $pelayanan->id }}">
                <div class="row mb-4">
                    <div class="col">
                        <label for="usaha">Nama Usaha</label>
                        <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror" name="nama_usaha"
                            value="{{ auth()->user()->nama_usaha }}">
                        @error('nama_usaha')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="pemilik">Nama Pemilik</label>
                        <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror"
                            name="nama_pemilik" value="{{ auth()->user()->nama }}">
                        @error('nama_pemilik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="kecamatan">Jalan</label>
                        <input type="text" name="jalan" value="{{ old('jalan') }}" id="jalan"
                            class="form-control @error('jalan') is-invalid @enderror">
                        @error('jalan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" id="kelurahan"
                            class="form-control @error('kelurahan') is-invalid @enderror">
                        @error('kelurahan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="kecamatan">Kab/kota</label>
                        <input type="text" name="kota" value="{{ old('kota') }}"
                            class="form-control @error('kota') is-invalid @enderror">
                        @error('kota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name="provinsi" value="{{ old('provinsi') }}"
                            class="form-control @error('provinsi') is-invalid @enderror">
                        @error('provinsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="pemilik">Handphone</label>
                        <input type="text" value="{{ old('no_hp', auth()->user()->no_telp) }}" name="no_hp"
                            class="form-control @error('no_hp') is-invalid @enderror">
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="usaha">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', auth()->user()->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="pemilik">Sektor Usaha</label>
                        <input type="text" disabled name="sektor_usaha" class="form-control"
                            value="{{ auth()->user()->sektor_usaha }}">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="usaha">Modal Usaha</label>
                        <input type="text" disabled
                            value="{{ auth()->user()->modal_sendiri + auth()->user()->modal_luar }}" name="modal_usaha"
                            class="form-control">
                        <small><i>* Diambil dari Modal Sendiri + Modal Luar</i></small>
                    </div>
                    <div class="col">
                        <label for="pemilik">Pilih Tanggal Pelayanan</label>
                        <input type="date" onchange="ubah_tgl()" id="tgl_pelayanan" name="tanggal"
                            class="form-control @error('date') is-invalid @enderror">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="keluhan">Jelaskan Permasalahan Anda Secara Singkat!</label>
                        <textarea name="permasalahan" id="permasalahan" cols="30" rows="10"
                            class="form-control @error('permasalahan') is-invalid @enderror">{{ old('permasalahan') }}</textarea>
                        @error('permasalahan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4 mt-5">
                    <div class="col-12 mb-2">
                        <h4 style="font-weight: 800">Registration Information</h4>
                    </div>
                    <div class="col">
                        <h5 class="font-weight-bold">{{ auth()->user()->nama_usaha }}</h5>
                        <p>Nama Usaha</p>
                    </div>
                    <div class="col">
                        <h5 class="font-weight-bold">{{ auth()->user()->nama }}</h5>
                        <p>Nama Pemilik</p>
                    </div>
                    <div class="col">
                        <h5 class="font-weight-bold">{{ $pelayanan->jenis }}</h5>
                        <p>Jenis Pelayanan</p>
                    </div>
                    <div class="col">
                        <h5 class="font-weight-bold text-success" id="tanggal"></h5>
                        <p>Tanggal</p>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success" style="width:150px">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
