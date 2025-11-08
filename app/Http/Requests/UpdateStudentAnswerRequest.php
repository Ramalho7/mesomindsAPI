<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'answer' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'answer.required' => 'A resposta é obrigatória.',
            'answer.string' => 'A resposta deve ser um texto.',
        ];
    }
}
