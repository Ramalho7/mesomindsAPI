<?php

namespace App\Http\Requests\SystemUser;

use Illuminate\Foundation\Http\FormRequest;

class ChangeStatusSystemUser extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'status' => 'required|in:inactive,active,banned,pending',
        ];
    }

    public function messages(): array
    {
        return [
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O status deve ser um dos seguintes valores: inactive, active, banned, pending.',
        ];
    }
}
