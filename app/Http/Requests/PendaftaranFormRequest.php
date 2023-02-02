<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranFormRequest extends FormRequest
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
            //
            'name' => [
                'required',
                'max:255'
            ],

            'gender' => [
                'required',
                'max:255'
            ],

            'phone' => [
                'required',
            ],

            'email' => [
                'required',
                'max:255',
                'email'
            ],

            'tanggal_lahir' => [
                'required',
                'max:255',
                'date'
            ],

            'tempat_lahir' => [
                'required',
                'max:255'
            ],

            'negara' => [
                'required',
                'max:255'
            ],

            'nik' => [
                'required',
                'max:255'
            ],
        ];
    }
}
