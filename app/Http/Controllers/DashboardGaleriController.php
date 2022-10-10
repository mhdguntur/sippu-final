<?php

namespace App\Http\Controllers;

use App\Models\ProdukGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGaleriController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'produk_id' => 'required',
            'url_foto' => 'required|mimes:png,jpg,jpeg'
        ]);
        $data['url_foto'] = $request->file('url_foto')->store('produk-galeri');

        ProdukGaleri::create($data);
        return back()->with('success', 'Gambar Berhasil Diupload!');
    }

    public function destroy(ProdukGaleri $galeri)
    {
        ProdukGaleri::destroy($galeri->id);
        Storage::delete($galeri->url_foto);
        return back()->with('success', 'Gambar Berhasil Dihapus!');
    }
}
