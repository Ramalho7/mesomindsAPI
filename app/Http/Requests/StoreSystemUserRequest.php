<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSystemUserRequest extends FormRequest
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
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:100|unique:system_users,email',
            'password' => 'required|string|min:8|confirmed',
            'cpf' => 'required|string|size:11|unique:system_users,cpf',
            'tipo' => 'required|in:Professor,Aluno,ADM,Moderador,Operador',
            'status' => 'sometimes|in:Ativo,Inativo,Bloqueado'
        ];
    }
}
