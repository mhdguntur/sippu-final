<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UMKMPemerintahRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'sektor_usaha' => 'required|max:255',
            'status' => 'required|max:255',
            'roles' => 'required|max:255'
        ];
    }
}
