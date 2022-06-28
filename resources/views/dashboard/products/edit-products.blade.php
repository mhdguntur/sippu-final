@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/produk') }}"
                        class="text-dark">Edit Produk</a></span>
            </p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-10">
            <form action="{{ route('produk.update', $produk->slug) }}" method="post">
                @method('put')
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="form-group mb-3">
                    <label for="nama">Nama Produk*</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $produk->nama) }}"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="harga">Harga*</label>
                    <input type="text" name="harga" id="harga" value="{{ old('harga', $produk->harga) }}"
                        class="form-control @error('harga') is-invalid @enderror">
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="deksripsi">Deksripsi*</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5"
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success py-2 float-right" style="width: 130px;">Edit Produk</button>
            </form>
        </div>
    </div>
@endsection
