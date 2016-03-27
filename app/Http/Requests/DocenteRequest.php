<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocenteRequest extends Request
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
            'nacionalidad'      => 'required',
            'cedula'            => 'min:6|max:8|required',
            'apellido1'         => 'min:1|max:20|required',
            'apellido2'         => 'min:1|max:20|required',
            'nombre1'           => 'min:1|max:20|required',
            'nombre2'           => 'min:1|max:20|required',
            'fe_nac'            => 'required',
            'edo_civil'         => 'required',
            'sexo'              => 'required',
            'lugar_nacimiento'  => 'min:1|max:40|required',
            'direccion'         => 'min:1|max:40|required',
            'telefono_hab'      => 'min:10|max:14|required',
            'telefono_cel'      => 'min:10|max:14|required',
            'email'             => 'min:7|max:40|required',
            'estado_id'         => 'required',
            'municipio_id'      => 'required',
            'parroquia_id'      => 'required',
            'nivel_estudio_id'  => 'required',

            'profesion'         => 'min:1|max:40|required',
            'lugar_trabajo'     => 'min:1|max:40|required',
            'departamento'      => 'min:1|max:40|required',
            'telefono_trabajo'  => 'min:10|max:14|required',
            'nomina_id'         => 'required',
            'filial_id'         => 'required'
        ];
    }
}
