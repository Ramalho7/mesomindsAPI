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
            'questions.*' => 'exists:questions,id',
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
            'type.in' => 'O tipo deve ser: Exam, Simulation, Activity ou Exercise.',
            'due_date.date' => 'A data de entrega deve ser uma data válida.',
            'due_date.after' => 'A data de entrega deve ser posterior à data atual.',
            'status.in' => 'O status deve ser Active ou Inactive.',
            'questions.array' => 'As questões devem ser um array.',
            'questions.*.exists' => 'Uma ou mais questões selecionadas não existem.',
        ];
    }
}