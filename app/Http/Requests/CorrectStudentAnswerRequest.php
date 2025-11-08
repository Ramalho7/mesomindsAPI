<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorrectStudentAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'score' => 'required|numeric|min:0|max:10',
            'feedback' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'score.required' => 'A nota é obrigatória.',
            'score.numeric' => 'A nota deve ser um número.',
            'score.min' => 'A nota mínima é 0.',
            'score.max' => 'A nota máxima é 10.',
            'feedback.string' => 'O feedback deve ser um texto.',
        ];
    }
}
