<?php

namespace App\Http\Requests\beneficiario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest

{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
    
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'parroquia' => 'required',
            'expediente'=> 'sometimes',
            'asunto' => 'required',
            'nombre' => 'required',
            'domicilio' => 'required',
            'colonia' => 'required',
            'edad' => 'required|numeric',
            'estado_civil' => 'required',
            'ocupacion' => 'required',
            'fecha_nacimiento' => 'date',
            'lugar_nacimiento' => 'required',
            'telefono_casa' => 'sometimes|regex:/^[0-9\-\(\)\/\*\#\+\s]*$/',
            'telefono_movil' => 'required|regex:/^[0-9\-\(\)\/\*\#\+\s]*$/',
            'nombre_conyuge' => 'sometimes',
            'parentesco_con' => 'sometimes',
            'estado_civil_con' => 'sometimes',
            'ocupacion_con' => 'sometimes',
            'edad_con' => 'sometimes|numeric',
            'escolaridad' => 'sometimes',
            'servicio_medico' => 'sometimes',

            //Familiar
            
            'nombre_familiar' => 'sometimes',
            'parentesco_familiar' => 'sometimes',
            'edad_familiar' => 'sometimes',
            'ocupacion_familiar' => 'sometimes',
            'ingreso_familiar' => 'sometimes',
            'total_ingreso_fam' => 'sometimes|numeric',

            

        ];
    }

 
    public function messages()
    {
        return [
            'parroquia.required' => 'El campo Parroquia es obligatorio.',
            'asunto.required' => 'El campo Asunto es obligatorio.',
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'domicilio.required' => 'El campo Domicilio es obligatorio.',
            'colonia.required' => 'El campo Colonia es obligatorio.',
            'edad.required' => 'El campo Edad es obligatorio.',
            'edad.numeric' => 'La edad debe ser un numero.',
            'estado_civil.required' => 'El campo Estado Civil es obligatorio.',
            'ocupacion.required' => 'El campo Ocupación es obligatorio.',
            'fecha_nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio.',
            'fecha_nacimiento.date' => 'El campo Fecha de Nacimiento debe ser una fecha válida.',
            'lugar_nacimiento.required' => 'El campo Lugar de Nacimiento es obligatorio.',
            'telefono_casa.regex' => 'El campo Teléfono de Casa contiene caracteres no válidos.',
            'telefono_movil.required' => 'El campo Teléfono Móvil es obligatorio.',
            'telefono_movil.regex' => 'El campo Teléfono Móvil contiene caracteres no válidos.',
            'edad_con.numeric' => 'La edad debe ser un numero.',

        ];
    }
}