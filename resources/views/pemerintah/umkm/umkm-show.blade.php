@extends('layouts.pemerintah')

@section('content')
	<div class="row mt-4">
		<div class="col">
			<p class="text-secondary">Dashboard &nbsp; /
				&nbsp; <span class="text-dark font-weight-bold"><a href="{{ route('umkm.index') }}" class="text-dark">Detail
						Profil</a></span></p>
			<div class="mt-2">
				@include('components.flash_message')
			</div>
		</div>
	</div>

	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-8 col-sm-12 rounded px-5 py-3 shadow">
			<h4 class="fw-bold mb-4 text-center">Profil</h4>
			@if ($umkm->url_ktp)
				<img src="{{ asset('storage/' . $umkm->url_ktp) }}" class="img-fluid d-flex mx-auto rounded">
			@else
				<div class="text-center">Foto KTP terverifikasi belum ada</div>
			@endif

			<ul class="list-group list-group-flush mt-5">
				<li class="list-group-item">Nama Lengkap: {{ $umkm->nama }}</li>
				<li class="list-group-item">NIK: {{ $umkm->nik }}</li>
				<li class="list-group-item">Email: {{ $umkm->email }}</li>
				<li class="list-group-item">Nama Usaha: {{ $umkm->nama_usaha }}</li>
				<li class="list-group-item">Telpon: {{ $umkm->no_telp }}</li>
				<li class="list-group-item">NPWP: {{ $umkm->npwp }}</li>
				<li class="list-group-item">No IUMK: {{ $umkm->no_iumk }}</li>
				<li class="list-group-item">No SIUP: {{ $umkm->no_siup }}</li>
				<li class="list-group-item">No TDP: {{ $umkm->no_tdp }}</li>
				<li class="list-group-item">Tanggal Mulai: {{ $umkm->tgl_mulai }}</li>
				<li class="list-group-item">Sektor Usaha: {{ $umkm->sektor_usaha }}</li>
				<li class="list-group-item">Sentra: {{ $umkm->sentra }}</li>
				<li class="list-group-item">Alamat: {{ $umkm->alamat }}</li>
				<li class="list-group-item">Usaha Utama: {{ $umkm->usaha_utama }}</li>
				<li class="list-group-item">Produk Hasil: {{ $umkm->produk_hasil }}</li>
				<li class="list-group-item">Tenaga Tetap: {{ $umkm->tenaga_tetap }}</li>
				<li class="list-group-item">Tenaga Tidak Tetap: {{ $umkm->tenaga_tidak_tetap }}</li>
				<li class="list-group-item">Tenaga Tidak Dibayar: {{ $umkm->tenaga_tidak_dibayar }}</li>
				<li class="list-group-item">Kapasitas Produksi: {{ $umkm->kapasitas_produksi }}</li>
				<li class="list-group-item">Harga Satuan: Rp. {{ number_format($umkm->harga_satuan) }}</li>
				<li class="list-group-item">Omzet: Rp. {{ number_format($umkm->omzet) }}</li>
				<li class="list-group-item">Modal Sendiri: Rp. {{ number_format($umkm->modal_sendiri) }}</li>
				<li class="list-group-item">Modal Luar: Rp. {{ number_format($umkm->modal_luar) }}</li>
				<li class="list-group-item">Laporan Keuangan: {{ $umkm->laporan_keuangan }}</li>
				<li class="list-group-item">Jangkauan Pemasaran: {{ $umkm->jangkauan_pemasaran }}</li>
				<li class="list-group-item">Pemasaran Online: {{ $umkm->pemasaran_online }}</li>
				<li class="list-group-item">Akun dibuat pada: {{ $umkm->created_at }} | {{ $umkm->created_at->diffForHumans() }}
				</li>
			</ul>
		</div>
	</div>
@endsection
