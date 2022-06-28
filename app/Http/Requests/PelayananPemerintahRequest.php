<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelayananPemerintahRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'jenis' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'url_foto' => 'required|file|mimes:png,jpg,jpeg|max:4096'
        ];
    }
}
