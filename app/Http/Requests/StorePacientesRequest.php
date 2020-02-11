<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePacientesRequest extends FormRequest
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
            'nombre' => 'required',
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'entidad' => 'required',
            'curp' => 'required',
            'fechaNacimiento' => 'required|date',
            'edad' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'codigoPostal' => 'required',
            'entidadFederativa' => 'required',
            'jurisdiccion' => 'required',
            'telefono' => 'required',
            'afiliacion' => 'required',
            'numeroAfiliacion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del paciente es obligatorio',
            'aPaterno.required' => 'El apellido paterno es obligatorio',
            'aMaterno.required' => 'El apellido materno es obligatorio',
            'entidad.required' => 'La entidad de nacimiento es obligatoria',
            'curp.required' => 'La CURP es obligatoria',
            'fechaNacimiento.required' => 'la fecha de nacimiento es obligatoria',
            'fechaNacimiento.date' => 'la fecha de nacimiento debe de ser una fecha valida',
            'edad.required' => 'La edad es obligatoria',
            'calle.required' => 'La nombre de la calle es obligatorio',
            'colonia.required' => 'El nombre de la colonia es obligatorio',
            'municipio.required' => 'El municipio es obligatorio',
            'codigoPostal.required' => 'El codigo postal es obligatorio',
            'entidadFederativa.required' => 'La entidad federativa es obligatoria',
            'jurisdiccion.required' => 'La jurisdiccion es obligatoria',
            'telefono.required' => 'El telefono de es obligatorio',
            'afiliacion.required' => 'El tipo de afiliacion es obligatorio',
            'numeroAfiliacion.required' => 'El numero de afiliación es obligatorio',
        ];
    }
}
