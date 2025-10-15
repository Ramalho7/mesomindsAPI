<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestaoComAlternativas extends FormRequest
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
            'alternativas' => 'required|array|min:2',
            'alternativas.*.valor' => 'required|string|max:255',
            'alternativas.*.correta' => 'nullable|boolean',
            'criador' => 'required|integer|exists:system_users,id',
            'tipo' => 'required|string|in:multipla,verdadeiroFalso,aberta',
        ];
    }
}
