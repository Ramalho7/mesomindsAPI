<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionCollectionRequest extends FormRequest
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
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string|max:500',
            'subject_id' => 'sometimes|required|exists:materias,id',
            'type' => 'sometimes|required|in:Exam,Simulation,Activity,Exercise',
            'due_date' => 'nullable|date|after:now',
            'status' => 'nullable|in:Active,Inactive',

            'questions' => 'nullable|array',
            'questions.*.id' => 'required|exists:questions,id',
            'questions.*.title' => 'sometimes|required|string|max:255',
            'questions.*.content' => 'sometimes|required|string',
            'questions.*.correction' => 'nullable|string',
            'questions.*.type' => 'sometimes|required|in:Multipla,VerdadeiroFalso,Aberta',
            'questions.*.status' => 'nullable|in:Active,Inactive',
            'questions.*.alternatives' => 'nullable|array',
            'questions.*.alternatives.*.id' => 'nullable|exists:alternatives,id',
            'questions.*.alternatives.*.content' => 'required|string|max:255',
            'questions.*.alternatives.*.correct' => 'nullable|boolean',
        ];
    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'title.max' => 'O título não pode exceder 255 caracteres.',
            'subject_id.required' => 'A matéria é obrigatória.',
            'subject_id.exists' => 'A matéria selecionada não existe.',
            'type.required' => 'O tipo é obrigatório.',
            'type.in' => 'O tipo deve ser um dos seguintes valores: Exam, Simulation, Activity, Exercise.',
            'questions.*.id.required' => 'O ID da questão é obrigatório.',
            'questions.*.id.exists' => 'Uma das questões não existe.',
            'questions.*.title.required' => 'O título da questão é obrigatório.',
            'questions.*.content.required' => 'O conteúdo da questão é obrigatório.',
        ];
    }
}
