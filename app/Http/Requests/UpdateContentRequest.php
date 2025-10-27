<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'content_type' => 'nullable|string|max:255',
            'content_type_description' => 'nullable|string',
            'content_tag' => 'nullable|string|max:255',
            'content_tag_description' => 'nullable|string',
            'status' => 'nullable|in:Ativo,Inativo,Rascunho',
            'published_at' => 'nullable|date',
            'is_moderator_only' => 'nullable|boolean',
            'images' => 'nullable|array',
            'images.*' => 'string',
            'image_alt_text' => 'nullable|array',
            'image_alt_text.*' => 'nullable|string|max:255',
        ];
    }

    public function messages():array{
        return [
            'status.in' => 'O campo status deve ser um dos seguintes valores: Ativo, Inativo, Rascunho.',
            'published_at.date' => 'O campo data de publicação deve ser uma data válida.',
            'is_moderator_only.boolean' => 'A tag deve ser apenas para moderadores deve ser verdadeiro ou falso.',
            'images.array' => 'O campo imagens deve ser um array.',
            'images.*.string' => 'Cada imagem deve ser uma string.',
            'image_alt_text.array' => 'O campo texto alternativo das imagens deve ser um array.',
            'image_alt_text.*.string' => 'Cada texto alternativo da imagem deve ser uma string.',
            'image_alt_text.*.max' => 'A descrição da imagem execedeu o limite.',
        ];
    }
}
