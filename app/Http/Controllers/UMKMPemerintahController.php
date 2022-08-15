<?php

namespace App\Http\Controllers;

use App\Http\Requests\UMKMPemerintahRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UMKMPemerintahController extends Controller
{
    public function index(Request $request)
    {
        $total_umkm = User::where('roles', 'Masyarakat')->get();
        // $sektor_usaha = User::where('roles', 'Masyarakat')->groupBy('sektor_usaha')->get();
        $sektor_usaha = DB::table('users')
            ->where('roles', 'Masyarakat')
            ->groupBy('sektor_usaha')
            ->select(DB::raw('count(id) as jumlah_sektor, sektor_usaha'))
            ->get();
        // dd($sektor_usaha);

        if ($request->get('sorttype')) {
            $sort_type = $request->get('sorttype');

            return view('pemerintah.umkm.pemerintah-umkm', [
                'title' => 'Halaman UMKM',
                'umkm' => User::where('roles', 'Masyarakat')
                    ->orderBy('kelurahan', "$sort_type")
                    ->paginate(10),
                'total_umkm' => $total_umkm,
                'sektor_usaha' => $sektor_usaha,
            ]);
        }

        return view('pemerintah.umkm.pemerintah-umkm', [
            'title' => 'Halaman UMKM',
            'umkm' => User::where('roles', 'Masyarakat')->paginate(10),
            'total_umkm' => $total_umkm,
            'sektor_usaha' => $sektor_usaha,
        ]);
    }

    public function edit(User $umkm)
    {
        return view('pemerintah.umkm.umkm-edit', [
            'title' => 'Edit UMKM: ' . $umkm->nama_usaha,
            'umkm' => $umkm
        ]);
    }

    public function show(User $umkm)
    {
        return view('pemerintah.umkm.umkm-show', [
            'umkm' => $umkm,
            'title' => 'Detail UMKM'
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
