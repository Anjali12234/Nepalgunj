<?php

namespace App\Http\Requests\EducationList;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'address' => ['required','string'],
            'contact_number' => ['required','string'],
            'affiliated' => ['nullable','string'],
            'description' => ['required','string'],
            'program' => ['nullable','string'],
            'website_url' => ['nullable','string'],
            'email' => ['nullable','string'],
            'facebook_url' => ['required','string'],
            'map_url' => ['required','string'],
            'whats_app_no' => ['required','numeric'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,webp'],

        ];
    }
}
