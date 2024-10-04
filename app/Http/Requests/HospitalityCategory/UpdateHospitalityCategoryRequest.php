<?php

namespace App\Http\Requests\HospitalityCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHospitalityCategoryRequest extends FormRequest
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
                'required',
                'string',
                Rule::unique('hospitality_categories', 'slug')->ignore($this->hospitalityCategory)],
            'status' => ['nullable','boolean'],
            'icon' =>['nullable','string'],

        ];
    }
}
