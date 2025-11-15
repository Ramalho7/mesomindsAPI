<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContent extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'content_type' => 'required|string|max:255',
            'content_type_description' => 'nullable|string',
            'content_tags' => 'required|array',
            'content_tags.*.tag_name' => 'required|string|max:255',
            'content_tags.*.description' => 'nullable|string|max:255',
            'status' => 'required|in:Ativo,Inativo,Rascunho',
            'published_at' => 'nullable|date',
            'is_moderator_only' => 'nullable|boolean',
            'images' => 'nullable|array',
            'images.*' => 'string',
            'image_alt_text' => 'nullable|array',
            'image_alt_text.*' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'content.required' => 'O campo conteúdo é obrigatório.',
            'content_type.required' => 'O campo tipo de conteúdo é obrigatório.',
            'content_tags.required' => 'O campo tags de conteúdo é obrigatório.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser um dos seguintes valores: Ativo, Inativo, Rascunho.',
            'published_at.date' => 'O campo data de publicação deve ser uma data válida.',
            'is_moderator_only.boolean' => 'A tag deve ser apenas para moderadores deve ser verdadeiro ou falso.',
            'images.array' => 'O campo imagens deve ser um array.',
            'images.*.string' => 'Cada imagem deve ser uma string.',
            'image_alt_text.array' => 'O campo texto alternativo das imagens deve ser um array.',
            'image_alt_text.*.string' => 'Cada texto alternativo da imagem deve ser uma string.',
            'image_alt_text.*.max' => 'A descrição da imagem excedeu o limite.',
        ];
    }
}
