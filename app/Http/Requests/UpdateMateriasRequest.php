<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateMateriasRequest extends FormRequest
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
        $materiaId = $this->route('id');

        return [
            'nome' => [
                'sometimes',
                'required',
                'string',
                'max:255',
                Rule::unique('materias', 'nome')->ignore($materiaId),
            ],
            'descricao' => 'sometimes|required|string',
        ];
    }
}
