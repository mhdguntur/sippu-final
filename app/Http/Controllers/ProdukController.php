<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;

class ProdukController extends Controller
{
    public function index()
    {
        return view('products.products', [
            'title' => 'Produk',
            'produk' => Produk::latest()->with('galeri')->get()
        ]);
    }

    public function show(Produk $produk)
    {
        return view('products.product', [
            'title' => 'Halaman Produk',
            'produk' => $produk
        ]);
    }

    public function about(User $user)
    {
        return view('products.about', [
            'title' => 'Tentang: ' . $user->nama,
            'user' => $user
        ]);
    }
}
