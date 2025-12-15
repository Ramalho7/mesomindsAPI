<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSystemUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            'nome' => 'sometimes|required|string|max:255',
            'email' => [
                'sometimes',
                'required',
                'email',
                Rule::unique('system_users')->ignore($userId),
            ],
            'tipo' => 'sometimes|required|in:Professor,Aluno,ADM,Moderador,Operador',
            'status' => 'sometimes|in:Ativo,Inativo,Bloqueado',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode exceder 255 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'O email informado já está em uso.',
            'tipo.required' => 'O campo tipo é obrigatório.',
            'tipo.in' => 'O tipo deve ser uma das seguintes opções: Professor, Aluno, ADM, Moderador, Operador.',
            'status.in' => 'O status deve ser uma das seguintes opções: Ativo, Inativo, Bloqueado.',
        ];
    }
}
