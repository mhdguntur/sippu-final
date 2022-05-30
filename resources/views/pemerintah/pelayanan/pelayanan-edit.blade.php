@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a
                        href="{{ url('pemerintah/pelayanan/' . $pelayanan->id . '/edit') }}" class="text-dark">Edit
                        Pelayanan</a></span></p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-10">
            <form action="{{ route('pelayanan.update', $pelayanan->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $pelayanan->judul) }}"
                        class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jenis">Jenis</label>
                    <input type="text" name="jenis" value="{{ old('jenis', $pelayanan->jenis) }}" id="jenis"
                        class="form-control @error('jenis') is-invalid @enderror">
                    @error('jenis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" value="{{ old('deskripsi', $pelayanan->deskripsi) }}"
                        id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="url_foto">Input Foto (.jpg/.png)</label>
                    <input type="hidden" name="fotoLama" value={{ asset('storage/' . $pelayanan->url_foto) }}>
                    <input type="file" name="url_foto" id="url_foto"
                        class="form-control w-25 @error('url_foto') is-invalid @enderror">
                    @error('url_foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success d-block float-right mt-3">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
