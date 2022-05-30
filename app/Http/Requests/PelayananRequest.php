<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelayananRequest extends FormRequest
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
            'user_id' => 'required',
            'status_pendaftaran' => 'required',
            'pelayanan_id' => 'required',
            'tanggal' => 'required|date',
            'nama_usaha' => 'required|max:255',
            'nama_pemilik' => 'required|max:255',
            'jalan' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'kota' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'no_hp' => 'required|integer',
            'email' => 'required|max:255',
            'permasalahan' => 'required|max:255'
        ];
    }
}
