<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'question_id' => 'required|exists:questions,id',
            'collection_id' => 'nullable|exists:question_collections,id',
            'answer' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'question_id.required' => 'O ID da questão é obrigatório.',
            'question_id.exists' => 'A questão especificada não existe.',
            'collection_id.exists' => 'A coleção especificada não existe.',
            'answer.required' => 'A resposta é obrigatória.',
            'answer.string' => 'A resposta deve ser um texto.',
        ];
    }
}
