<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RestauranteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //dd("aa");
        return [
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'horario_funcionamento' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'avaliacao' => 'nullable|numeric|min:0|max:5',
            'proprietario_id' => 'required|uuid|exists:users,id'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do restaurante é obrigatório.',
            'endereco.required' => 'O endereço do restaurante é obrigatório.',
            'telefone.required' => 'O telefone do restaurante é obrigatório.',
            'proprietario_id.required' => 'O ID do proprietário é obrigatório.',
            'proprietario_id.uuid' => 'O ID do proprietário deve ser um UUID válido.',
            'proprietario_id.exists' => 'O proprietário especificado não existe.'
        ];
    }

    public function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(response()->json([

            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()

        ]));

    }
}
