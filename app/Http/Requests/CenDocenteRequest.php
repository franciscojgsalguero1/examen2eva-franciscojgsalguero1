<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CenDocenteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'denominacion' => 'required',
            'codigos' => 'required',
            'cif' => 'required',
            'titularidad' => 'required|in:public,private',
            'cp' => 'required',
            'director_nom' => 'required',
            'director_apell1' => 'required',
            'identificador' => 'required',
            'tipo_identificable' => ['required', 'in:dni,nie,passport,others'],
        ];
    }
}
