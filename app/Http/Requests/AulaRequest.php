<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AulaRequest extends FormRequest
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
           'nombre'=>'required|min:3',
           'capacidad'=>'required|min:3'
        ];
    }
    public function messages(){
        return [
            'nombre.required'=>"Necesito el nombre",
            'capacidad.required'=>"Necesito la capacidad"
            
        ];
    }
}
