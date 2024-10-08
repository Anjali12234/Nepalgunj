<?php

namespace App\Http\Requests\JobCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateJobCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'main_category_id' => ['required'],
            'title' => ['required','string'],
            'position' => ['required','string'],
            'slug' => [
                'required',
                'string',
                Rule::unique('job_categories', 'slug')->ignore($this->jobCategory)],
            'status' => ['nullable','boolean'],

        ];
    }
}
