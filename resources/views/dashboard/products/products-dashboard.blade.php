@extends('layouts.dashboard')

@section('content')
    @can('verified')
        <div class="row mt-4">
            <div class="col">
                <p class="text-secondary">Dashboard &nbsp; /
                    &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/produk') }}"
                            class="text-dark">Produk</a></span></p>
                <div class="mt-2">
                    @include('components.flash_message')
                </div>
                <a href="{{ route('produk.create') }}" class="btn btn-success p-2 mt-3" style="width:150px;">
                    Tambah Produk
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-5">
            <div class="col-4">
                {{ $produk->links() }}
            </div>
            {{-- <div class="col-2">
                <div class="input-group">
                    <input type="text" name="search" id="search" style="border-color: rgb(255, 38, 0);" class="form-control">
                    <button class="btn" style="border-color: rgb(255, 38, 0);"><i
                            class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                </div>
            </div> --}}
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background-color: rgb(250, 168, 168);">
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>
                                    <div class="d-flex" style="width: 100px;">
                                        <a href="{{ url('dashboard/produk/' . $data->slug) }}"
                                            class="text-primary btn bg-none">Gallery</a>
                                        <a href="{{ url('dashboard/produk/' . $data->slug . '/edit') }}"
                                            class="text-dark btn bg-none">Edit</a>
                                        <form action="{{ url('dashboard/produk/' . $data->slug) }}" class='d-inline'
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')"
                                                class="btn bg-none text-danger bg-none">Delete</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=" 4">
                                        <h4 class="text-center font-weight-bold">Tidak ada produk terbaru. Silakan
                                            tambahkan
                                            produk Anda!</h4>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="row mt-4">
            <div class="col">
                <p class="text-secondary">Dashboard &nbsp; /
                    &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/produk') }}"
                            class="text-dark">Produk</a></span></p>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-6 text-center">
                <h3>Silakan verifikasi akun anda <a href="{{ url('dashboard/profil#verify-ktp') }}">di sini</a> untuk
                    melanjutkan</h3>
            </div>
        </div>
    @endcan
@endsection
