<?php

namespace App\Http\Requests\EntertainmentCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntertainmentCategoryRequest extends FormRequest
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
