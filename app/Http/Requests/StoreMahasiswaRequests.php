<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nim' => 'required|min:10',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'no_hp' => 'required|min:12',
            'kelas_id' => 'required',
        ];
    }
}