@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp;
                /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('dashboard/pelayanan') }}"
                        class="text-dark">Pelayanan</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-end mt-5">
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
                    <thead style="background-color: rgb(250, 168, 168);">
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendaftaran as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->pelayanan->judul }}</td>
                                <td>{{ $data->pelayanan->jenis }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>
                                    <a href="{{ url('dashboard/pelayanan/' . $data->id) }}"
                                        class="text-primary text-decoration-none">Lihat Tiket</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h4 class="text-center font-weight-bold">Tidak ada pelayanan terdaftar</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
