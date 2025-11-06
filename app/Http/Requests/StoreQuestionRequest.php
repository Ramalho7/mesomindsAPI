<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'materia' => 'required|integer|exists:materias,id',
            'type' => 'required|string|in:Multipla,VerdadeiroFalso,Aberta',
            'status' => 'required|string|in:Ativo,Inativo,Rascunho',
            'alternatives' => 'required|array|min:2',
            'alternatives.*.content' => 'required|string|max:255',
            'alternatives.*.correct' => 'nullable|boolean',
        ];
    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'title.string' => 'O campo título deve ser uma string.',
            'title.max' => 'O campo título não pode exceder 255 caracteres.',
            'content.required' => 'O campo conteúdo é obrigatório.',
            'content.string' => 'O campo conteúdo deve ser uma string.',
            'materia.required' => 'O campo matéria é obrigatório.',
            'materia.integer' => 'O campo matéria deve ser um número inteiro.',
            'materia.exists' => 'A matéria especificada não existe.',
            'type.required' => 'O campo tipo é obrigatório.',
            'type.string' => 'O campo tipo deve ser uma string.',
            'type.in' => 'O campo tipo deve ser um dos seguintes valores: Multipla, VerdadeiroFalso, Aberta.',
            'status.required' => 'O campo status é obrigatório.',
            'status.string' => 'O campo status deve ser uma string.',
            'status.in' => 'O campo status deve ser um dos seguintes valores: Ativo, Inativo, Rascunho.',
            'alternatives.required' => 'O campo alternativas é obrigatório.',
            'alternatives.array' => 'O campo alternativas deve ser um array.',
            'alternatives.min' => 'O campo alternativas deve conter pelo menos 2 alternativas.',
            'alternatives.*.content.required' => 'Cada alternativa deve ter um conteúdo.',
            'alternatives.*.content.string' => 'O conteúdo de cada alternativa deve ser uma string.',
            'alternatives.*.content.max' => 'O conteúdo de cada alternativa não pode exceder 255 caracteres.',
            'alternatives.*.correct.boolean' => 'O campo correto de cada alternativa deve ser verdadeiro ou falso.',
        ];
    }
}