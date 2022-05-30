<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelayananRequest;
use App\Models\Pelayanan;
use App\Models\Pendaftaran;

class PelayananController extends Controller
{
    public function index()
    {
        return view('pelayanan.pelayanan', [
            'title' => 'Pelayanan',
            'pelayanan' => Pelayanan::latest()->get()
        ]);
    }

    public function show(Pelayanan $pelayanan)
    {
        return view('pelayanan.show', [
            'title' => 'Konsultasi Bisnis',
            'pelayanan' => $pelayanan
        ]);
    }

    public function create(Pelayanan $pelayanan)
    {
        return view('pelayanan.create', [
            'title' => 'Daftar ' . $pelayanan->judul,
            'pelayanan' => $pelayanan
        ]);
    }

    public function store(PelayananRequest $request)
    {
        $data = $request->validated();

        Pendaftaran::create($data);
        return redirect('pelayanan/daftar/sukses');
    }
}
