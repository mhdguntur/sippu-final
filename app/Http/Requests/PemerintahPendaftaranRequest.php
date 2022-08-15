<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemerintahPendaftaranRequest extends FormRequest
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
            'nama_usaha' => 'required|max:255',
            'nama_pemilik' => 'required|max:255',
            'no_hp' => 'required|integer|max:255',
            'permasalahan' => 'required|max:255',
            'status_pendaftaran' => 'required|max:255'
        ];
    }
}
