<?php

namespace App\Http\Requests\NewsCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNewsCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'position' => ['nullable','string'],
            'slug' => ['nullable','string',Rule::unique('news_categories', 'slug')->ignore($this->newsCategory)],

            'status' => ['nullable','boolean'],
        ];
    }
}
