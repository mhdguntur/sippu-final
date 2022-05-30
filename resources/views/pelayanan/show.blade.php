@extends('layouts.main')

@section('content')
    <div class="row mt-3">
        <div class="col">
            <p>Home &nbsp;/ Pelayanan &nbsp;/ <span class="font-weight-bold">Pelayanan Details</span></p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            @if ($pelayanan->url_foto)
                <img src="{{ asset('storage/' . $pelayanan->url_foto) }}" class="img-fluid rounded" style="width: 600px;">
            @else
                <img src="https://source.unsplash.com/random/700x400" alt="">
            @endif
        </div>
        <div class="col-lg-8 col-sm-12">
            <h2 class="font-weight-bold mt-2">{{ $pelayanan->judul }}</h2>
            <p>Jenis: {{ $pelayanan->jenis }}</p>
            <small class="text-secondary text-uppercase">Disperindagkop UKM</small>
            <p class="mt-4">{{ $pelayanan->deskripsi }}</p>
            <a href="{{ url('pelayanan/' . $pelayanan->judul . '/daftar') }}" class="btn btn-success mt-4"
                style="width: 100px;">Daftar</a>
        </div>
    </div>
@endsection
