<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'           => 'required',
            'description'    => 'required|min:5',
            'body'           => 'required',
            'price'          => 'required',
            'photos.*'         => 'image'


        ];
    }
    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatorio!',
            'min'      => 'Campo deve ter no minimo :min caracteres!',
            'image'    => 'Essa não e uma imagem válida'
        ];
    }
}
