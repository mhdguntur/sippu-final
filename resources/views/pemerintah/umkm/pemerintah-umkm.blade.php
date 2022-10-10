@extends('layouts.pemerintah')

@section('content')
	<div class="row mt-4">
		<div class="col">
			<p class="text-secondary">Dashboard &nbsp; /
				&nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/umkm') }}" class="text-dark">UMKM</a></span>
			</p>
			<div class="mt-2">
				@include('components.flash_message')
			</div>
		</div>
	</div>
	<div class="row d-flex justify-content-between mt-5">
		<div class="col-4">
			{{ $umkm->links() }}
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
					<thead class="rounded">
						<tr>
							<th>No Mitra</th>
							<th>Nama UMKM</th>
							<th>Nama Pemilik</th>
							<th>Sektor Usaha</th>
							<th>No. Telpon</th>
							<th>
								Kabupaten/Kota
								<a href="{{ route('umkm.index', ['sorttype' => 'asc']) }}">
									<i class="fa-solid fa-arrow-up"></i>
								</a>
								<a href="{{ route('umkm.index', ['sorttype' => 'desc']) }}">
									<i class="fa-solid fa-arrow-down"></i>
								</a>
							</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="umkm">
						@forelse ($umkm as $data)
							<tr>
								<td>{{ $data->no_tdp }}</td>
								<td>{{ $data->nama_usaha }}</td>
								<td>{{ $data->nama }}</td>
								<td>{{ $data->sektor_usaha }}</td>
								<td>{{ $data->no_telp }}</td>
								<td>{{ $data->kelurahan }}</td>
								<td>{{ $data->status }}</td>
								<td>
									<div class="d-flex">
										<a href="{{ route('umkm.show', $data->id) }}" class="btn btn-sm text-primary bg-none">Detail</a>
										<a href="{{ route('umkm.edit', $data->id) }}" class="btn btn-sm text-warning bg-none">Edit</a>
										<form action="{{ route('umkm.destroy', $data->id) }}" method="post">
											@method('delete')
											@csrf
											<button onclick="return confirm('Apakah Anda Yakin?')" type="submit"
												class="btn btn-sm text-danger bg-none">Hapus</button>
										</form>
									</div>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="6">
									<h4 class="font-weight-bold text-center">Tidak ada UMKM terdaftar</h4>
								</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

			<div class="mt-5">
				<h3>Data Umkm</h3>
				<div class="row mt-5">
					<div class="col-lg-3 col-sm-12">
						<div class="card">
							<div class="card-header text-center">Jumlah UMKM</div>
							<div class="card-body">
								<h4 class="font-weight-bold text-center">{{ $total_umkm->count() }}</h4>
							</div>
						</div>
					</div>
					@foreach ($sektor_usaha as $sektor)
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<div class="card-header text-center">{{ $sektor->sektor_usaha }}</div>
								<div class="card-body">
									<h4 class="font-weight-bold text-center">{{ $sektor->jumlah_sektor }}</h4>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
