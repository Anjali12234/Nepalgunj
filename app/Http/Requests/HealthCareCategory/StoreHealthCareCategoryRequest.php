<?php

namespace App\Http\Requests\HealthCareCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreHealthCareCategoryRequest extends FormRequest
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
            'title_ne' => ['required','string'],
            'position' => ['nullable','string'],
            'type' => ['nullable'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('health_care_categories', 'slug')
            ],
            'status' => ['nullable','boolean'],
            'icon' =>['nullable','string'],

        ];
    }
}
