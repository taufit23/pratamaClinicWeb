<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataDokterCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|unique:users,username',
            'name' => 'required|min:3|string',
            'nip' => 'required|min_digits:18|integer|unique:dokters,nip',
            'bidang' => 'required|string',
            'alamat' => 'required|string',
        ];
    }
}
