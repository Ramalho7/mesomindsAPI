<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:system_users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:student,teacher',
        ];
    }

    public function messages(): array
    {
        return [
            'password.confirmed' => 'As senhas não coincidem',
            'email.unique' => 'Email já cadastrado',
            'tipo.in' => 'Tipo de usário inválido. Escolha entre Aluno e Professor.',
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'name' => [
                'description' => 'Nome completo do usuário. (Poderá ser usado como username)',
                'example' => 'Jessica Jones',
                'type' => 'string',
                'required' => true,
            ],
            'email' => [
                'description' => 'Email válido do usuário.',
                'example' => 'jessica@example.com',
                'type' => 'string',
                'required' => true,
            ],
            'password' => [
                'description' => 'Senha (mínimo 8 caracteres).',
                'example' => 'secret123',
                'type' => 'string',
                'required' => true,
            ],
            'password_confirmation' => [
                'description' => 'Confirmação da senha (deve ser igual a password).',
                'example' => 'secret123',
                'type' => 'string',
                'required' => true,
            ],
            'tipo' => [
                'description' => 'Tipo/role do usuário. Valores: Aluno ou Professor.',
                'example' => 'Aluno',
                'type' => 'string',
                'required' => true,
            ],
        ];
    }
}
