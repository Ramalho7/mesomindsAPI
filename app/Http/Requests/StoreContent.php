<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContent extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'content_type' => 'required|string|max:255',
            'content_type_description' => 'nullable|string',
            'content_tag' => 'required|string|max:255',
            'content_tag_description' => 'nullable|string',
            'is_moderator_only' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_alt_text' => 'nullable|string|max:255',
            'materia' => 'nullable|string|max:255',
            'status' => 'required|in:Ativo,Inativo,Rascunho',
            'published_at' => 'nullable|date',
        ];
    }
}
