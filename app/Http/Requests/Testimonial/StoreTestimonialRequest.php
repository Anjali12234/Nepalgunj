<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
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
            'image' => ['required','mimes:png,jpg,jpeg,jfif,webp'],

        ];
    }
}
