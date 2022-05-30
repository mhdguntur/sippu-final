<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class DashboardPelayananController extends Controller
{
    public function index()
    {
        return view('dashboard.pelayanan.pelayanan-dashboard', [
            'title' => 'Pelayanan',
            'pendaftaran' => Pendaftaran::with('pelayanan')->where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function show(Pendaftaran $pendaftaran)
    {
        return view('dashboard.pelayanan.pelayanan-show', [
            'title' => 'Pelayanan',
            'pendaftaran' => $pendaftaran
        ]);
    }
}
