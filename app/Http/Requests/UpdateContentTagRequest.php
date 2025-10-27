<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $contentTag = $this->route('tagsconteudo');
        $contentTagId = $contentTag->id ?? $contentTag;
        
        return [
            'tag_name' => "nullable|string|max:255|unique:content_tags,tag_name,{$contentTagId}",
            'description' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'tag_name.string' => 'O campo nome da tag deve ser uma string.',
            'tag_name.max' => 'O campo nome da tag excedeu o limite máximo de caracteres (255).',
            'tag_name.unique' => 'O nome da tag já existe.',
            'description.string' => 'O campo descrição deve ser uma string.',
        ];
    }
}