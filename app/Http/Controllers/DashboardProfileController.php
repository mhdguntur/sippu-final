<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardProfileRequest;
use App\Models\User;

class DashboardProfileController extends Controller
{

    public function index()
    {
        return view('dashboard.profil.profil-dashboard', [
            'title' => 'Halaman Profil'
        ]);
    }

    public function update(DashboardProfileRequest $request, User $profil)
    {
        $data = $request->validated();
        if ($request->url_ktp) {
            $data['url_ktp'] = $request->file('url_ktp')->store('foto-ktp');
        }

        User::where('id', $profil->id)->update($data);
        return redirect('dashboard/profil')->with('success', 'Data Profil Berhasil Diedit!');
    }
}
