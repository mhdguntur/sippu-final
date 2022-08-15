<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'nama' => 'required|max:255',
            'nik' => 'required|max:16',
            'password' => 'required|min:8|max:255',
            'roles' => 'required|in:Masyarakat,Pemerintah',
            'status' => 'required',
            'url_ktp' => 'nullable',
            'nama_usaha' => 'required|max:255',
            'kelurahan' => 'required|max:35',
            'no_telp' => 'required|numeric',
            'npwp' => 'required|integer',
            'no_iumk' => 'required|integer',
            'no_siup' => 'required|integer',
            'no_tdp' => 'required|integer',
            'tgl_mulai' => 'required',
            'sektor_usaha' => 'required',
            'sentra' => 'required',
            'id_sentra' => 'required|integer',
            'alamat' => 'required|max:255',
            'usaha_utama' => 'required',
            'produk_hasil' => 'required',
            'tenaga_tetap' => 'required',
            'tenaga_tidak_tetap' => 'required|integer',
            'tenaga_tidak_bayar' => 'required|integer',
            'kapasitas_produksi' => 'required',
            'harga_satuan' => 'required|integer',
            'omzet' => 'required|integer',
            'modal_sendiri' => 'required|integer',
            'modal_luar' => 'required|integer',
            'laporan_keuangan' => 'required',
            'jangkauan_pemasaran' => 'required',
            'pemasaran_online' => 'required'
        ];
    }
}
