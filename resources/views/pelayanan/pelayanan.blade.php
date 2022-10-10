@extends('layouts.main')

@section('content')
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center" style="font-weight: 800">Pelatihan dan Pelayanan</h2>
            <p class="mt-3 text-center">Daftarkan UMKM anda untuk mengikuti pelatihan dan pelayanan yang diadakan oleh
                DISPERINDAGKOP UKM Provinsi Riau</p>
        </div>
    </div>

    <div class="row mt-4">
        @forelse ($pelayanan as $data)
            <div class="col-lg-3 col-sm-12 mb-3">
                <a href="{{ url('pelayanan/' . $data->judul) }}" class="text-decoration-none text-dark">
                    <div class="card">
                        @if ($data->url_foto)
                            <img src="{{ asset('storage/' . $data->url_foto) }}" style="width:270px; height:250px; object-fit: cover;" class="img-fluid" >
                        @else
                            <img src="https://source.unsplash.com/random/300x200" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul }}</h5>
                            <a href="{{ url('pelayanan/' . $data->judul . '/daftar') }}"
                                class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <h3 class="mx-auto mt-4 font-weight-bold">Tidak ada pelayanan terbaru.</h3>
        @endforelse
    </div>
@endsection
