<?php

namespace App\Http\Controllers;

use App\Http\Requests\UMKMPemerintahRequest;
use App\Models\User;

class UMKMPemerintahController extends Controller
{
    public function index()
    {
        return view('pemerintah.umkm.pemerintah-umkm', [
            'title' => 'Halaman UMKM',
            'umkm' => User::where('roles', '=', 'Masyarakat')->paginate(10)
        ]);
    }

    public function edit(User $umkm)
    {
        return view('pemerintah.umkm.umkm-edit', [
            'title' => 'Edit UMKM: ' . $umkm->nama_usaha,
            'umkm' => $umkm
        ]);
    }

    public function update(UMKMPemerintahRequest $request, User $umkm)
    {
        $data = $request->validated();

        User::where('id', $umkm->id)->update($data);
        return redirect('pemerintah/umkm')->with('success', 'Data UMKM Berhasil Diedit');
    }

    public function destroy(User $umkm)
    {
        User::destroy($umkm->id);
        return back()->with('success', 'Data UMKM Berhasil Dihapus!');
    }
}
