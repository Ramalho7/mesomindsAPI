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
        return true;
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
                'max:100',
                Rule::unique('system_users')->ignore($userId)
            ],
            'password' => 'sometimes|string|min:8|confirmed',
            'cpf' => [
                'sometimes',
                'required',
                'string',
                'size:11',
                Rule::unique('system_users')->ignore($userId)
            ],
            'tipo' => 'sometimes|required|in:Professor,Aluno,ADM',
            'status' => 'sometimes|in:Ativo,Inativo,Bloqueado'
        ];
    }
}
