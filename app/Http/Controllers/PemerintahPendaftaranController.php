<?php

namespace App\Http\Controllers;

use App\Http\Requests\PemerintahPendaftaranRequest;
use App\Models\Pendaftaran;

class PemerintahPendaftaranController extends Controller
{
    public function index()
    {
        return view('pemerintah.pendaftaran.pemerintah-pendaftaran', [
            'title' => 'Halaman Pendaftaran',
            'pendaftaran' => Pendaftaran::with('user')->paginate(5)
        ]);
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pemerintah.pendaftaran.edit-pendaftaran', [
            'title' => 'Edit Pendaftaran: ' . $pendaftaran->pelayanan->judul,
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function update(PemerintahPendaftaranRequest $request, Pendaftaran $pendaftaran)
    {
        $data = $request->validated();
        Pendaftaran::where('id', $pendaftaran->id)->update($data);
        return redirect('pemerintah/pendaftaran')->with('success', 'Data Pendaftaran Berhasil Diedit');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        Pendaftaran::destroy($pendaftaran->id);
        return back()->with('success', 'Data Pendaftaran Berhasil Dihapus!');
    }
}
