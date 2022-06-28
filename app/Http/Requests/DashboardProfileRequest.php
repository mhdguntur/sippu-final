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
            'nama' => 'required|sometimes|max:255',
            'email' => 'required|sometimes|email|max:255',
            'nik' => 'required|sometimes|integer',
            'status' => 'sometimes',
            'alamat' => 'required|sometimes|max:255',
            'no_telp' => 'required|sometimes|integer',
            'url_ktp' => 'required|sometimes|file|mimes:png,jpg,jpeg|max:4096',
            'nama_usaha' => 'required|sometimes|max:255',
            'tenaga_tetap' => 'required|sometimes|max:255',
            'npwp' => 'required|sometimes|max:255',
            'tenaga_tidak_tetap' => 'required|sometimes|max:255',
            'no_iumk' => 'required|sometimes|integer',
            'tenaga_tidak_bayar' => 'required|sometimes|integer',
            'no_siup' => 'required|sometimes|integer',
            'kapasitas_produksi' => 'required|sometimes|max:255',
            'no_tdp' => 'required|sometimes|integer',
            'harga_satuan' => 'required|sometimes|integer',
            'tgl_mulai' => 'required|sometimes|date',
            'omzet' => 'required|sometimes|integer',
            'sektor_usaha' => 'required|sometimes|max:255',
            'modal_sendiri' => 'required|sometimes|integer'
        ];
    }
}
