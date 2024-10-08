<?php

namespace App\Http\Requests\JobList;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'details' => ['required'],
            'map_url' => ['required','string'],
            'facebook_url' => ['required','string'],
            'whats_app_no' => ['required','numeric'],
            'website_url' => ['nullable','string'],
            'image' => ['required','image'],
            'address' => ['required','string'],
            'job_name' => ['nullable','string'],
            'contact_number' => ['required','string'],
            'job_type' => ['required','string'],
            'years_of_experience' => ['required','string'],
            'gender' => ['required','string'],
            'salary_range' => ['required','string'],
            'desired_skills_experience' => ['required','string'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,webp'],

        ];
    }
}

