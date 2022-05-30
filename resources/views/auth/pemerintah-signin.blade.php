@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-8">
            <h2 class="font-weight-bold text-center">Login Pemerintah</h2>
            @include('components.flash_message')
            <form action="{{ url('pemerintah/auth') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="hidden" name="roles" value="Pemerintah">
                    <label for="password">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" id="email"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label for="password">Password</label>
                    <input type="password" value="{{ old('password') }}" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-50 d-block mx-auto">Login</button>
            </form>
        </div>
    </div>
@endsection
