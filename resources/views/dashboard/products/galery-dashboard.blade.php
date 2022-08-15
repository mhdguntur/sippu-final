@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/produk') }}"
                        class="text-dark">Galeri Produk</a></span>
            </p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Tambah Gambar
            </button>
            <p>(.png/.jpg/.jpeg)</p>
            @error('url_foto')
                <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
            <div class="collapse mt-3" id="collapseExample">
                <form action="{{ route('galeri.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="input-group w-50">
                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                        <input type="file" name="url_foto" class="form-control">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="row d-flex justify-content-end mt-5">
        <div class="col-2">
            <div class="input-group">
                <input type="text" name="search" id="search" style="border-color: rgb(255, 38, 0);" class="form-control">
                <button class="btn" style="border-color: rgb(255, 38, 0);"><i
                        class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            </div>
        </div>
    </div> --}}
    <div class="row mt-3">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background-color: rgb(250, 168, 168);">
                        <tr>
                            <th>Id</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produk->galeri as $produk)
                            <tr>
                                <td style="vertical-align: middle">{{ $produk->id }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $produk->url_foto) }}" alt=""
                                        class="rounded img-fluid" width="300px">
                                </td>
                                <td style="vertical-align: middle">
                                    <form action="{{ url('dashboard/galeri/' . $produk->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Apakah Anda Yakin?')" type="submit"
                                            class="btn bg-none text-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <h4 class="text-center font-weight-bold">Tidak ada gambar terbaru</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
