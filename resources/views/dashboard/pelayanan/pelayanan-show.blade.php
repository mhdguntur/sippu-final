@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        <div class="card card-border border-dark p-4" style="border-radius: 15px;">
            <div class="d-flex mb-3">
                @if ($pendaftaran->pelayanan->url_foto)
                    <img src="{{ asset('storage/' . $pendaftaran->pelayanan->url_foto) }}" class="img-fluid"
                        style="width: 500px;">
                @else
                    <img src="https://source.unsplash.com/random/400x200" class="img-fluid">
                @endif
                <h3 class="text-uppercase ml-4">E-Ticket <span class="d-block">No. UMKM:
                        {{ $pendaftaran->id }}</span></h3>
            </div>
            <h3>{{ $pendaftaran->jenis }}</h3>
            <div class="d-flex justify-content-between mb-4">
                <p class="text-danger">{{ $pendaftaran->nama_usaha }}</p>
                <p class="text-danger">{{ $pendaftaran->tanggal }}</p>
                <p class="text-danger">{{ $pendaftaran->pelayanan->jenis }}</p>
                <p class="text-danger">{{ $pendaftaran->nama_pemilik }}</p>
            </div>
            <p class="text-danger font-weight-bold">Status: {{ $pendaftaran->status_pendaftaran }}</p>
            <p>{{ $pendaftaran->pelayanan->deskripsi }}</p>
        </div>
    </div>
@endsection
