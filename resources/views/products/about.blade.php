@extends('layouts.main')

@section('content')
    <div class="row mt-5 d-flex justify-content-center">
        <h2 class="text-center font-weight-bold">Tentang UMKM</h3>
            <div class="col-10 mt-4">
                <img src="{{ asset('storage/' . $user->url_ktp) }}" class="img-fluid rounded d-flex mx-auto mt-3"
                    width="300px">
                <ul class="list-group list-group-flush mt-5">
                    <li class="list-group-item">Nama Usaha: {{ $user->nama_usaha }}</li>
                    <li class="list-group-item">Nama Pemilik: {{ $user->nama }}</li>
                    <li class="list-group-item">No. Telpon: {{ $user->no_telp }}</li>
                    <li class="list-group-item">Sektor Usaha: {{ $user->sektor_usaha }}</li>
                    <li class="list-group-item">Produk Hasil: {{ $user->produk_hasil }}</li>
                    <li class="list-group-item">Pemasaran Online: {{ $user->pemasaran_online }}</li>
                </ul>
            </div>
    </div>
@endsection
