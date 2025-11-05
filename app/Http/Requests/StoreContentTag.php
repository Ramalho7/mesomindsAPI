<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreContentTag extends FormRequest
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
            'tag_name' => 'required|string|max:255|unique:content_tags,tag_name',
            'description' => 'required|string|max:255',
            'is_moderator_only' => 'required|boolean',
            'count' => 'nullable|integer',
        ];
    }

    public function messages (): array{
        return [
            'tag_name.required' => 'O campo nome da tag é obrigatório.',
            'tag_name.string' => 'O campo nome da tag deve ser uma string.',
            'tag_name.max' => 'O campo nome execeu o limite máximo de caracteres(255).',
            'tag_name.unique' => 'O nome da tag já existe.',
            'description.required' => 'O campo descrição é obrigatório.',
            'description.string' => 'O campo descrição deve ser uma string.',
            'description.max' => 'O campo descrição execeu o limite máximo de caracteres(255).',
            'is_moderator_only.required' => 'O campo apenas para moderadores é obrigatório.',
            'is_moderator_only.boolean' => 'O campo apenas para moderadores deve ser verdadeiro ou falso.',
            'count.integer' => 'O campo contagem deve ser um número inteiro.'
        ];
    }
}
