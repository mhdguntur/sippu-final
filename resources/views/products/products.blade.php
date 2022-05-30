@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @include('components.flash_message')
            <img src="{{ asset('img/products-hero.png') }}" width="100%" class="mb-4 rounded" alt="">
            <div class="input-group">
                <input type="text" name="search" id="search" placeholder="Search your product" class="form-control"
                    style="border-color: rgb(255, 38, 0);">
                <button class="btn" style="border-color: rgb(255, 38, 0);"><i
                        class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-between">
            @forelse ($produk as $data)
                <a href="{{ url("produk/$data->slug") }}" class="text-decoration-none mb-4">
                    @foreach ($data->galeri->take(1) as $image)
                        <img src="{{ asset('storage/' . $image->url_foto) }}" width="270px" class="rounded img-fluid">
                    @endforeach
                    <h6 class="mt-2 text-dark font-weight-bold">{{ $data->nama }}</h6>
                    <span class="text-orange">Rp. {{ $data->harga }}</span>
                </a>
            @empty
                <h3 class="mx-auto mt-4 font-weight-bold">Tidak ada produk terbaru. Silakan Coba Lagi Nanti.</h3>
            @endforelse
        </div>
    </div>
@endsection
