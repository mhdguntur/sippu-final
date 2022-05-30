<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DashboardProfileRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'nik' => 'required|integer',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|integer',
            'url_ktp' => 'file|mimes:png,jpg',
            'nama_usaha' => 'required|max:255',
            'tenaga_tetap' => 'required|max:255',
            'npwp' => 'required|max:255',
            'tenaga_tidak_tetap' => 'required|max:255',
            'no_iumk' => 'required|integer',
            'tenaga_tidak_bayar' => 'required|integer',
            'no_siup' => 'required|integer',
            'kapasitas_produksi' => 'required|max:255',
            'no_tdp' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'tgl_mulai' => 'required|date',
            'omzet' => 'required|integer',
            'sektor_usaha' => 'required|max:255',
            'modal_sendiri' => 'required|integer'
        ];
    }
}
