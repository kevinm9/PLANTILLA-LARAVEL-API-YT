<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateCategoriaRequest extends FormRequest
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
            'nombre' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es requerido',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre de la categoria',
        ];
    }

}
