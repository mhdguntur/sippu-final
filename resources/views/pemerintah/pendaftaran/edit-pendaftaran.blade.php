@extends('layouts.pemerintah')
@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a
                        href="{{ url('pemerintah/pendaftaran/' . $pendaftaran->id . '/edit') }}"
                        class="text-dark">Edit
                        Pendaftaran</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-10">
            <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_usaha">Nama UMKM</label>
                    <input type="text" name="nama_usaha" id="nama_usaha"
                        value="{{ old('nama_usaha', $pendaftaran->nama_usaha) }}"
                        class="form-control @error('nama_usaha') is-invalid @enderror">
                    @error('nama_usaha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nama_pemilik">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" id="nama_pemilik"
                        value="{{ old('nama_pemilik', $pendaftaran->nama_pemilik) }}"
                        class="form-control @error('nama_pemilik') is-invalid @enderror">
                    @error('nama_pemilik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp">No. Handphone</label>
                    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $pendaftaran->no_hp) }}"
                        class="form-control @error('no_hp') is-invalid @enderror">
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="permasalahan">Permasalahan</label>
                    <textarea name="permasalahan" rows="5" id="permasalahan"
                        class="form-control @error('permasalahan') is-invalid @enderror">{{ old('permasalahan', $pendaftaran->permasalahan) }}</textarea>
                    @error('permasalahan]')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status_pendaftaran">Status</label>
                    <input type="text" name="status_pendaftaran" id="status_pendaftaran"
                        value="{{ old('status_pendaftaran', $pendaftaran->status_pendaftaran) }}"
                        class="form-control @error('status_pendaftaran') is-invalid @enderror">
                    @error('status_pendaftaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success d-block float-right py-2 mt-3" style="width: 150px;">Edit
                    Pendaftaran</button>
            </form>
        </div>
    </div>
@endsection
