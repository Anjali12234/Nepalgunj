<?php

namespace App\Http\Requests\EducationCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEducationCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'main_category_id' => ['nullable'],
            'title_en' => ['required','string'],
            'title_ne' => ['nullable','string'],    
            'position' => ['nullable','string'],
            'type' => ['nullable'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('education_categories', 'slug')
            ],
            'status' => ['nullable','boolean'],
            'icon' =>['nullable','string'],

        ];
    }
}
