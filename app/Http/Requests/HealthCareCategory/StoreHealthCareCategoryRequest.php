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
            'main_category_id' => ['required'],
            'type' => ['required'],


        ];
    }
}
