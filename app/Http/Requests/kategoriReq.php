<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kategoriReq extends FormRequest
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
            'nama_kategori' => 'required | min:3 | max:50',
            'slug'          => 'required | min:3 | max:50'
        ];
    }

    public function messages()
    {
        return[
            'nama_kategori.required' => 'Form Kategori harus diisi!',
            'nama_kategori.min'      => 'Form Kategori minimal berisi 3 karakter!',
            'nama_kategori.max'      => 'Form Kategori maksimal berisi 50 karakter!',
            'slug.required'          => 'Form slug harus diisi!',
            'slug.min'               => 'Form slug minimal berisi 3 karakter!',
            'slug.max'               => 'Form slug maksimal berisi 50 karakter!'
        ];
    }
}
