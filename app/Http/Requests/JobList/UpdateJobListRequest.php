<?php

namespace App\Http\Requests\JobList;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobListRequest extends FormRequest
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
            'facebook_url' => ['nullable','string'],
            'whats_app_no' => ['required','numeric'],
            'website_url' => ['nullable','string'],
            'image' => ['nullable','image'],
            'address' => ['required','string'],
            'job_name' => ['nullable','string'],
            'contact_number' => ['required','string'],
            'job_type' => ['nullable','string'],
            'category' => ['nullable','string'],
            'post' => ['required','string'],
            'years_of_experience' => ['required','string'],
            'gender' => ['required','string'],
            'salary_range' => ['required','string'],
            'desired_skills_experience' => ['required','string'],
            'publish_date' => ['required','date'],
            'deadline_date' => ['required','date'],
        ];
    }
}
