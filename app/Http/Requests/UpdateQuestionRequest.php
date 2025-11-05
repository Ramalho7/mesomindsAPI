<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->route('user'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'materia' => 'sometimes|integer|exists:materias,id',
            'type' => 'sometimes|string|in:Multipla,VerdadeiroFalso,Aberta',
            'status' => 'sometimes|string|in:Ativo,Inativo,Rascunho',
            'alternatives' => 'sometimes|array|min:2',
            'alternatives.*.content' => 'required_with:alternatives|string|max:255',
            'alternatives.*.correct' => 'nullable|boolean',
        ];
    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'title.string' => 'O campo título deve ser uma string.',
            'title.max' => 'O campo título não pode exceder 255 caracteres.',
            'content.string' => 'O campo conteúdo deve ser uma string.',
            'materia.integer' => 'O campo matéria deve ser um número inteiro.',
            'materia.exists' => 'A matéria especificada não existe.',
            'type.string' => 'O campo tipo deve ser uma string.',
            'type.in' => 'O campo tipo deve ser um dos seguintes valores: Multipla, VerdadeiroFalso, Aberta.',
            'status.string' => 'O campo status deve ser uma string.',
            'status.in' => 'O campo status deve ser um dos seguintes valores: Ativo, Inativo, Rascunho.',
            'alternatives.array' => 'O campo alternativas deve ser um array.',
            'alternatives.min' => 'O campo alternativas deve conter pelo menos 2 alternativas.',
            'alternatives.*.content.required_with' => 'Cada alternativa deve ter um conteúdo.',
            'alternatives.*.content.string' => 'O conteúdo de cada alternativa deve ser uma string.',
            'alternatives.*.content.max' => 'O conteúdo de cada alternativa não pode exceder 255 caracteres.',
            'alternatives.*.correct.boolean' => 'O campo correto de cada alternativa deve ser verdadeiro ou falso.',
        ];
    }
}