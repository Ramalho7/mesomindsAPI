<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContent extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'content_type' => 'required|string|max:255',
            'content_type_description' => 'nullable|string',
            'content_tag' => 'required|string|max:255',
            'content_tag_description' => 'nullable|string',
            'status' => 'required|in:Ativo,Inativo,Rascunho',
            'published_at' => 'nullable|date',
            'is_moderator_only' => 'nullable|boolean',
            'images' => 'nullable|array',
            'images.*' => 'string',
            'image_alt_text' => 'nullable|array',
            'image_alt_text.*' => 'nullable|string|max:255',
        ];
    }
}
