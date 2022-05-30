@extends('layouts.main')

@section('content')
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-4">
            <img src="{{ asset('img/shopping-bag.jpg') }}" width="400px">
            <h4 class="font-weight-bold text-center">Welcome To Store</h4>
            <p class="mt-3 text-center">{{ session('success') }}</p>
            <a href="{{ url('dashboard/produk') }}" class="btn btn-success d-block mb-3">My Dashboard</a>
            <a href="{{ url('produk') }}" class="btn btn-secondary d-block">Go to Shopping</a>
        </div>
    </div>
@endsection
