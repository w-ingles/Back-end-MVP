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
            'foto_restaurante' => 'required|image|mimes:png|max:10240',

            // Validando os campos dentro do JSON 'dados'
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
            'foto_restaurante.required' => 'A foto do restaurante é obrigatória.',
            'foto_restaurante.image' => 'O arquivo deve ser uma imagem.',
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

    public function prepareForValidation()
    {
        $this->merge(json_decode($this->data, true, 512, JSON_THROW_ON_ERROR));
    }
}
