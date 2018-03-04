<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gantiPasReq extends FormRequest
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
            'nama'       => 'required | min:3 | max:50',
            'email'      => 'required | email',
            'pasLama'    => 'required | min:6',
            'pasBaru'    => 'required | min:6',
            'pasBaruCek' => 'required | min:6',
        ];
    }

    public function messages()
    {
        return[
            'nama.required'       => 'Form nama tidak boleh kosong',
            'nama.min'            => 'Form nama minimal berisi 3 karakter',
            'nama.max'            => 'Form nama maksimal berisi 50 karakter',
            'email.required'      => 'Form email tidak boleh kosong',
            'email.email'         => 'Format email salah',
            'pasLama.required'    => 'Form password lama tidak boleh kosong',
            'pasLama.min'         => 'Form password lama minimal berisi 6 karakter',
            'pasBaru.required'    => 'Form password baru tidak boleh kosong',
            'pasBaru.min'         => 'Form password baru minimal berisi 6 karakter',
            'pasBaruCek.required' => 'Form password tidak boleh kosong',
            'pasBaruCek.min'      => 'Form password baru minimal berisi 6 karakter',
        ];
    }
}
