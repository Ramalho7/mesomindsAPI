<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionCollectionRequest extends FormRequest
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
            'description' => 'nullable|string|max:500',
            'subject_id' => 'required|exists:materias,id',
            'type' => 'required|in:Exam,Simulation,Activity,Exercise',
            'due_date' => 'nullable|date|after:now',
            'status' => 'nullable|in:Active,Inactive',
            'questions' => 'nullable|array',
            'questions.*.title' => 'required|string|max:255',
            'questions.*.content' => 'required|string',
            'questions.*.correction' => 'nullable|string',
            'questions.*.materia' => 'required|integer|exists:materias,id',
            'questions.*.type' => 'required|in:Multipla,VerdadeiroFalso,Aberta',
            'questions.*.status' => 'required|in:Active,Inactive',
            'questions.*.alternatives' => 'nullable|array',
            'questions.*.alternatives.*.content' => 'required|string',
            'questions.*.alternatives.*.correct' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'title.max' => 'O título não pode exceder 255 caracteres.',
            'subject_id.required' => 'A matéria é obrigatória.',
            'subject_id.exists' => 'A matéria selecionada não existe.',
            'type.required' => 'O tipo é obrigatório.',
            'type.in' => 'O tipo deve ser: Exam, Simulation, Activity ou Exercise.',
            'due_date.date' => 'A data de entrega deve ser uma data válida.',
            'due_date.after' => 'A data de entrega deve ser posterior à data atual.',
            'status.in' => 'O status deve ser Active ou Inactive.',
            'questions.*.title.required' => 'O título da questão é obrigatório.',
            'questions.*.content.required' => 'O conteúdo da questão é obrigatório.',
            'questions.*.materia.required' => 'A matéria da questão é obrigatória.',
            'questions.*.materia.exists' => 'A matéria selecionada não existe.',
            'questions.*.type.required' => 'O tipo da questão é obrigatório.',
            'questions.*.type.in' => 'O tipo da questão deve ser: Multipla, VerdadeiroFalso ou Aberta.',
            'questions.*.status.required' => 'O status da questão é obrigatório.',
            'questions.*.alternatives.*.content.required' => 'O conteúdo da alternativa é obrigatório.',
            'questions.*.alternatives.*.correct.required' => 'O campo "correct" da alternativa é obrigatório.',
        ];
    }
}
