<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
            $ktp_path = $request->file('url_ktp')->storePublicly('foto-ktp');
            $data['url_ktp'] = $ktp_path;

            $img_path = storage_path('app/public/' . $ktp_path);

            $ktp_file = fopen($img_path, 'rb');
            $ktp_filename = basename($img_path);

            $response = Http::attach('file', $ktp_file, $ktp_filename)
                ->acceptJson()
                ->withHeaders([
                    'Authentication' => 'bearer ' . env('AKSARAKAN_TOKEN')
                ])
                ->put('https://api.aksarakan.com/document/ktp')
                ->json();

            try {
                $ocr_data = Validator::make($response, [
                    'result.nik.value' => 'required|string',
                    'result.nama.value' => 'required|string'
                ])->validate();

                if ($data['nik'] == $ocr_data['result']['nik']['value'] && strtolower( $data['nama'])== strtolower( $ocr_data['result']['nama']['value'])) {
                    $data['status'] = 'Sudah Diverifikasi';
                    User::where('id', $profil->id)->update($data);
                    return redirect('dashboard/profil')->with('success', 'Selamat, profil Anda telah terverifikasi!');
                } else {
                    return redirect('dashboard/profil')->with('failed', 'Data KTP tidak sesuai!' . print_r($response, true));
                }
            } catch (ValidationException $e) {
                return redirect('dashboard/profil')->with('failed', 'Foto KTP tidak terdeteksi!');
            }
        }

        User::where('id', $profil->id)->update($data);
        return redirect('dashboard/profil')->with('success', 'Data profil telah berhasil diedit!');
    }
}
