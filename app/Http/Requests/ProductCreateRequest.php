<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'title' => 'required|min:5|max:20',
            'descripcion' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El nombre es requerido',
            'title.min' => 'El titulo debe contener al menos 5 caracteres',
            'title.max' => 'El titulo no debe superar 20 caracteres',
            'descripcion.required' => 'La descripcion es requerida',
            'price.required' => 'El precio es requerido'
        ];
    }
}
