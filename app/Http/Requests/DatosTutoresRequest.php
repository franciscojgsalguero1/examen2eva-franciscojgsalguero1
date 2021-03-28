<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosTutoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bussines' => ['required', 'min:3'],
            'typedocument' => 'required|in:dni,nie,passport,others',
            'identity' => 'required',
            'name' => 'required|min:3',
            'firstname' => 'required',
            'secondname' => '',
            'country' => ['in:spain,italy'],
            'province' => '',
            'municipality' => '',
            'state' => ['required', 'in:active,notactive'],
            'telephone' => 'required',
            'email' => 'required|email'
        ];
    }
}