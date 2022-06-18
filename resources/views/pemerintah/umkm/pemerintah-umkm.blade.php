@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/umkm') }}"
                        class="text-dark">UMKM</a></span></p>
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
                            <th>Id</th>
                            <th>Nama UMKM</th>
                            <th>Nama Pemilik</th>
                            <th>Sektor Usaha</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($umkm as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->sektor_usaha }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('umkm.edit', $data->id) }}"
                                            class="btn bg-none text-primary">Edit</a>
                                        <form action="{{ route('umkm.destroy', $data->id) }}" method="post">
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
                                <td colspan="6">
                                    <h4 class="font-weight-bold text-center">Tidak ada UMKM terdaftar</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
