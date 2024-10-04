<?php

namespace App\Http\Requests\HealthCareCategory;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHealthCareCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'main_category_id' => ['required'],
            'title_en' => ['required','string'],
            'title_ne' => ['nullable','string'],
            'position' => ['required','string'],
            'type' => ['required'],
            'slug' => [
                'nullable',
                'string',
                Rule::unique('health_care_categories', 'slug')->ignore($this->healthCare)],
            'status' => ['nullable','boolean'],
            'icon' =>['nullable','string'],

        ];
    }
}
