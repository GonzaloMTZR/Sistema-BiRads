<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJurisdiccionRequest extends FormRequest
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
            'nombre_estado' => 'required',
            'nombre_jurisdiccion' => 'required',
            'municipio' => 'required',
            'codigo_localidad' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'nombre_estado.required' => 'El campo de estado es obligatoria',
            'nombre_jurisdiccion.required' => 'El nombre de la jurisdicción es obligatorio',
            'municipio.required' => 'El municipio es obligatoria',
            'codigo_localidad.required' => 'El codigo de localidad es obligatorio',
        ];
    }
}
