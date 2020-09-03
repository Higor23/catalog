<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
            $messages = [
                'required' => 'O campo é obrigatório!',
                'nome.min' => 'É necessário no mínimo 3 caracteres no nome!',
                'description.min' => 'É necessário no mínimo 5 caracteres no nome!'
            ];
        
                'name' => 'required|min:3|max:255|unique:products',
                'description' => 'nullable|min:5|max:255',
         $messages;
        ];
    }
}
