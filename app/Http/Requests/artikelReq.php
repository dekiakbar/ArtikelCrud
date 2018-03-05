<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class artikelReq extends FormRequest
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
            'judul'          => 'required | min:3',
            'slug'           => 'required',
            'kategori'       => 'required',
            'tag'            => 'required',
            'meta_keyword'   => 'required',
            'status'         => 'required',
            'kutipan'        => 'required',
            'meta_deskripsi' => 'required',
            'artikel'        => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required'          =>'Form judul harus diisi',
            'judul.min'               =>'Form judul minimal berisi 3 karakter',
            'slug.required'           =>'Form slug harus diisi',
            'kategori.required'       =>'Form kategori harus dipilih',
            'meta_keyword.required'   =>'Form meta keyword harus diisi',
            'status.required'         =>'Form status harud dipilih',
            'kutipan.required'        =>'Form kutipan harus diisi',
            'meta_deskripsi.required' =>'Form meta deskripsi harus diisi',
            'artikel.required'        =>'Form artikel harus diisi',
        ];
    }
}
