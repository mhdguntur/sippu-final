@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/pelayanan') }}"
                        class="text-dark">Pelayanan</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
            <a href="{{ route('pelayanan.create') }}" class="btn btn-success py-2 mt-3" style="width:180px;">
                Tambah Pelayanan
            </a>
        </div>
    </div>
    <div class="row d-flex justify-content-between mt-5">
        <div class="col-4">
            {{ $pelayanan->links() }}
        </div>
        <div class="col-2">
            <div class="input-group">
                <input type="text" name="search" id="search" style="border-color: rgb(255, 38, 0);" class="form-control">
                <button class="btn" style="border-color: rgb(255, 38, 0);"><i
                        class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="rounded">
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelayanan as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->jenis }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('pelayanan.edit', $data->id) }}"
                                            class="btn bg-none text-primary">Edit</a>
                                        <form action="{{ url('pemerintah/pelayanan/' . $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Apakah Anda Yakin?')" type="submit"
                                                class="btn bg-none text-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h4 class="font-weight-bold text-center">Tidak ada pelayanan terbaru</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
