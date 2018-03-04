<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tagReq extends FormRequest
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
            'nama_tag'    => 'required | min:3 | max: 50',
            'slug'        => 'required | min:3 | max:50',
            'kategori_id' => 'required | min:1 | max:5'
        ];
    }

    public function messages()
    {
        return [
            'nama_tag.required'    => 'Form tag harus diisi!',
            'nama_tag.min'         => 'Form tag minimal berisi 3 karakter!',
            'nama_tag.max'         => 'Form tag maksimal berisi 50 karakter',
            'slug.required'        => 'Form slug harus diisi!',
            'slug.min'             => 'Form slug minimal berisi 3 karakter!',
            'slug.max'             => 'Form slug maksimal berisi 50 karakter',
            'kategori_id.required' => 'Form kategori harus dipilih!',
            'kategori_id.min'      => 'Form kategori minimal berisi 3 karakter!',
            'kategori_id.max'      => 'Form kategori maksimal berisi 50 karakter',

        ];
    }
}
