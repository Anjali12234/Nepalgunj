<?php

namespace App\Http\Requests\HealthCareList;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHealthCareListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'department' => ['nullable','string'],
            'n_m_c_no' => ['nullable','numeric'],
            'qualification' => ['nullable','string'],
            'o_p_d_schedule' => ['nullable','string'],
            'details' => ['required','string'],
            'youtube_link' => ['required','string'],
            'address' => ['required','string'],
            'map_url' => ['required','string'],
            'twitter_url' => ['nullable','string'],
            'facebook_url' => ['required','string'],
            'whats_app_no' => ['required','numeric'],
            'image' => ['nullable','image'],
            'name' => ['required','string'],
            'email' => ['nullable','string'],
            'website_url' => ['nullable','string'],
            'contact_number' => ['required','string'],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,webp'],
        ];
    }
}
