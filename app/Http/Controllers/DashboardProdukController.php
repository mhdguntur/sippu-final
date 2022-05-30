<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardProdukRequest;
use App\Models\Produk;
use Illuminate\Support\Str;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')->where('user_id', auth()->user()->id)->paginate(10);
        return view('dashboard.products.products-dashboard', [
            'title' => 'Produk',
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.products-create', ['title' => 'Tambah Produk Baru']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DashboardProdukRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['nama']);

        Produk::create($data);
        return redirect('dashboard/produk')->with('success', 'Produk Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('dashboard.products.galery-dashboard', [
            'title' => 'Gallery: ' . $produk->nama,
            'produk' => $produk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.products.edit-products', [
            'title' => 'Edit Produk: ' . $produk->nama,
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(DashboardProdukRequest $request, Produk $produk)
    {
        $data = $request->validated();
        Produk::where('id', $produk->id)
            ->update($data);
        return redirect('dashboard/produk')->with('success', 'Produk Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id);
        return back()->with('success', 'Produk Berhasil Dihapus!');
    }
}
