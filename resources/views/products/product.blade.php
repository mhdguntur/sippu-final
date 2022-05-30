@extends('layouts.main')

@section('content')
    <div class="row mt-2">
        <div class="col">
            <p><a href="{{ url('/') }}" class="text-dark">Home</a> &nbsp;/ Produk &nbsp;/ <span
                    class="font-weight-bold">Detail Produk</span></p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-9 col-sm-10">
            @foreach ($produk->galeri->take(1) as $image)
                <img src="{{ asset('storage/' . $image->url_foto) }}" id="image" class="rounded" width="700">
            @endforeach
        </div>
        <div class="col-lg-2 col-sm-10">
            @foreach ($produk->galeri as $image)
                <img src="{{ asset('storage/' . $image->url_foto) }}" onclick="previewImg(this)" class="rounded mb-3"
                    width="200">
            @endforeach
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-8 col-sm-12">
            <h3 class="font-weight-bold">{{ $produk->nama }}</h3>
            <a href="{{ url('produk/tentang/' . $produk->user->id) }}" class="text-secondary mb-3 d-block">By:
                {{ $produk->user->nama }}</a>
            <h5 style="color: rgb(255, 38, 0);">$1,409</h5>
            <p>{{ $produk->deskripsi }}</p>
        </div>
    </div>
@endsection
