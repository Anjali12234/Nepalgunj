<?php

namespace App\Http\Requests\EntertainmentList;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntertainmentListRequest extends FormRequest
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
            'description' => ['required','string'],
            'website_url' => ['nullable','string'],
            'email' => ['nullable','string'],
            'facebook_url' => ['required','string'],
            'youtube_url' => ['nullable','string'],
            'tiktok_url' => ['required','string'],
            'thumbnail' => ['required','image'],
            'map_url' => ['required','string'],
            'whats_app_no' => ['required','numeric'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,webp'],

        ];
    }
}
