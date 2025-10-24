<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestaoRequest extends FormRequest
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
            'titulo' => 'required|string|max:255',
            'corpo' => 'required|string|max:255',
            'materia' => 'required|integer|exists:materias,id',
            'criador' => 'required|integer|exists:system_users,id',
            'tipo' => 'required|string|in:multipla,verdadeiroFalso,aberta',
            'alternativas' => 'sometimes|array|min:2',
            'alternativas.*.valor' => 'required_with:alternativas|string|max:255',
            'alternativas.*.correta' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'criador.required' => 'O campo criador é obrigatório.',
            'criador.integer' => 'O campo criador deve ser um número inteiro.',
            'criador.exists' => 'O criador especificado não existe.',
            'tipo.required' => 'O campo tipo é obrigatório.',
            'tipo.string' => 'O campo tipo deve ser uma string.',
            'tipo.in' => 'O campo tipo deve ser um dos seguintes valores: multipla, verdadeiroFalso, aberta.',
            'materia.required' => 'O campo materia é obrigatório.',
            'materia.integer' => 'O campo materia deve ser um número inteiro.',
            'materia.exists' => 'A materia especificada não existe.',
            'titulo.required' => 'O campo titulo é obrigatório.',
            'titulo.string' => 'O campo titulo deve ser uma string.',
            'titulo.max' => 'O campo titulo não pode exceder 255 caracteres.',
            'corpo.required' => 'O campo corpo é obrigatório.',
            'corpo.string' => 'O campo corpo deve ser uma string.',
            'corpo.max' => 'O campo corpo não pode exceder 255 caracteres.',
            'alternativas.array' => 'O campo alternativas deve ser um array.',
            'alternativas.min' => 'O campo alternativas deve conter pelo menos 2 alternativas.',
            'alternativas.*.valor.required_with' => 'Cada alternativa deve ter um valor quando o campo alternativas estiver presente.',
            'alternativas.*.valor.string' => 'O valor de cada alternativa deve ser uma string.',
            'alternativas.*.valor.max' => 'O valor de cada alternativa não pode exceder 255 caracteres.',
            'alternativas.*.correta.boolean' => 'O campo correta de cada alternativa deve ser verdadeiro ou falso.',
        ];
    }
}
