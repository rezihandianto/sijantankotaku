<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JembatanRequest extends FormRequest
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
            'name' => [
                'required', 'string',
            ],
            'ruas_jalan' => [
                'required', 'string',
            ],
            'panjang' => [
                'required',
            ],
            'jumlah_bentang' => [
                'required'
            ],
        ];
    }
}
