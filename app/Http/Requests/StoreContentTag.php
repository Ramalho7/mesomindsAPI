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
        // $user = Auth::user();

        // return $user && in_array($user->tipo, ['ADM', 'Moderador', 'Operador']);

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
}
