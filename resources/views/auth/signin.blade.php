@extends('layouts.main')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-6 col-sm-12">
            <img src="{{ asset('img/signin.png') }}" style="border-radius: 0 30px 0 30px; margin-left: 130px;">
        </div>
        <div class="col-lg-5 col-sm-12">
            <h3 class="font-weight-bold mb-4">Belanja kebutuhan utama, menjadi lebih mudah</h3>
            @include('components.flash_message')
            <form action="{{ url('authenticate') }}" method="post" autocomplete="off">
                @csrf
                <div class="form-group mb-4">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success w-100 d-block mb-3">Sign In To My Account</button>
                <a href="{{ url('signup') }}" class="btn btn-secondary w-100">Sign Up</a>
            </form>
        </div>
    </div>
@endsection
