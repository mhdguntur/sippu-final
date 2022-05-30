@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/umkm') }}"
                        class="text-dark">UMKM</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8">
            <form action="{{ route('umkm.update', $umkm->id) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_usaha">Nama Usaha</label>
                    <input type="text" value="{{ old('nama_usaha', $umkm->nama_usaha) }}" name="nama_usaha"
                        id="nama_usaha" class="form-control @error('nama_usaha') is-invalid @enderror">
                    @error('nama_usaha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Pemilik</label>
                    <input type="text" value="{{ old('nama', $umkm->nama) }}" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="sektor_usaha">Sektor Usaha</label>
                    <input type="text" value="{{ old('sektor_usaha', $umkm->sektor_usaha) }}" name="sektor_usaha"
                        id="sektor_usaha" class="form-control @error('sektor_usaha') is-invalid @enderror">
                    @error('sektor_usaha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <input type="text" value="{{ old('status', $umkm->status) }}" name="status" id="status"
                        class="form-control @error('status') is-invalid @enderror">
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status">Roles</label>
                    <input type="text" value="{{ old('roles', $umkm->roles) }}" name="roles" id="roles"
                        class="form-control @error('roles') is-invalid @enderror">
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn py-2 btn-success d-block float-right" style="width: 140px;">Edit
                    Data</button>
            </form>
        </div>
    </div>
@endsection
