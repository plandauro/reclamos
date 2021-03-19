<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReclamo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false; //utilizar cuando exista usurios y roles
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
                'name' => 'required',
                'type_document'  => 'required',
                'number_document'  => 'required|max:11',
                'region'  => 'required',
                'provincia'  => 'required',
                'distrito'  => 'required',
                'direccion'  => 'required',
                'categoria'  => 'required',
                'email'  => 'required',
                'descripcion'  => 'required|min:10'
        ];
    }

    /* Creado nuevo Metodo para cambiar el nombre del Objeto validado - FORMULARIO */
    public function attributes()
    {
        return[
            'name'  => 'Nombre, de la persona que Reclama',
        ];
    }

    /* Creado nuevo Metodo para VALIDAR el FORMULARIO*/
    public function messages()
    {
        return[
            'descripcion.required'   => 'Debe ingresar la descripcion completa de la INCIDENCIA.',
        ];
    }
}
