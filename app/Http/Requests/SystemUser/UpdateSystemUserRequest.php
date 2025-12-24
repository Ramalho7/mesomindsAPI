<?php

namespace App\Http\Requests\SystemUser;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
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
        $authUser = auth()->user();

        $roleValidation = 'sometimes|required|in:';

        if ($authUser->role === SystemUserRoleEnum::ADMIN) {
            $roleValidation .= 'admin,moderator,operator';
        } elseif (in_array($authUser->role, [SystemUserRoleEnum::STUDENT, SystemUserRoleEnum::TEACHER], true)) {
            $roleValidation .= 'student,teacher';
        } else {
            $roleValidation = 'prohibited';
        }

        return [
            'name' => 'sometimes|required|string|max:255',
            'email' => [
                'sometimes',
                'required',
                'email',
                Rule::unique('system_users')->ignore($userId),
            ],
            'role' => $roleValidation,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome não pode exceder 255 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'O email informado já está em uso.',
            'role.required' => 'O campo tipo é obrigatório.',
            'role.in' => 'O tipo não está dentre as opções permitidas.',
            'role.prohibited' => 'Você não tem permissão para atualizar o campo tipo.',
        ];
    }
}
