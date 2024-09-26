<?php

namespace App\Http\Requests\PropertyCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePropertyCategoryRequest extends FormRequest
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
            'slug' => [
                'nullable',
                'string',
                Rule::unique('property_categories', 'slug')
                ->ignore($this->propertyCategory)],
            'status' => ['nullable','boolean'],
            'icon' =>['nullable','string'],

        ];
    }
}
