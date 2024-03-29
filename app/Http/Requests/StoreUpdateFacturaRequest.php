<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFacturaRequest extends FormRequest
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
            'formasdepago_id' => ['required', 'numeric', 'min:1', 'regex:/^\d+$/', 'exists:App\Models\Formasdepago,id'],
            'cliente_id' => ['required', 'numeric', 'min:1', 'regex:/^\d+$/', 'exists:App\Models\User,id'],
            'productos' => 'required|array|min:1',
            'productos.*.id' => 'required|numeric|min:1|distinct',
            'productos.*.cantidad' => 'required|numeric|gt:0|min:1',
        ];

    }
}
