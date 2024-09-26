<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'post' => ['required','string'],
            'passed_year' => ['required','string'],
            'description' => ['required','string'],
            'image' => ['nullable','mimes:png,jpg,jpeg,jfif,webp'],


        ];
    }
}
