<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelayananPemerintahRequest;
use App\Models\Pelayanan;
use Illuminate\Support\Facades\Storage;

class PelayananPemerintahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemerintah.pelayanan.pemerintah-pelayanan', [
            'title' => 'Halaman Pelayanan',
            'pelayanan' => Pelayanan::orderBy('id', 'asc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemerintah.pelayanan.pelayanan-create', ['title' => 'Buat Pelayanan Baru']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PelayananPemerintahRequest $request)
    {
        $data = $request->validated();

        $data['url_foto'] = $request->file('url_foto')->store('pelayanan-image');

        Pelayanan::create($data);
        return redirect('pemerintah/pelayanan')->with('success', 'Pelayanan Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayanan $pelayanan)
    {
        return view('pemerintah.pelayanan.pelayanan-edit', [
            'title' => 'Edit Pelayanan: ' . $pelayanan->judul,
            'pelayanan' => $pelayanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(PelayananPemerintahRequest $request, Pelayanan $pelayanan)
    {
        $data = $request->validated();

        if ($request->url_foto) {
            Storage::delete($request->fotoLama);
            $data['url_foto'] = $request->file('url_foto')->store('pelayanan-image');
        }
        Pelayanan::where('id', $pelayanan->id)->update($data);
        return redirect('pemerintah/pelayanan')->with('success', 'Pelayanan Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelayanan $pelayanan)
    {
        Pelayanan::destroy($pelayanan->id);
        return back()->with('success', 'Pelayanan Berhasil Dihapus!');
    }
}
