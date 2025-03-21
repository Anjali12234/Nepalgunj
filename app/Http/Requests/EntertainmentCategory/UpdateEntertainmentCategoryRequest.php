<?php

namespace App\Http\Requests\EntertainmentCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEntertainmentCategoryRequest extends FormRequest
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
              'type' => ['required'],
              'slug' => [
                  'required',
                  'string',
                  Rule::unique('entertainment_categories', 'slug')->ignore($this->entertainmentCategory)],
              'status' => ['nullable','boolean'],
              'icon' =>['nullable','string'],
  
          ];
    }
}
