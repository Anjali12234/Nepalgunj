<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name_ne' => ['required','string'],
            'name_en' => ['required','string'],
            'address_ne' => ['required','string'],
            'address_en' => ['required','string'],
            'phone_number' => ['required','string'],
            'email' => ['required', 'email'],
            'logo1' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'logo2' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'map_url' => ['nullable', 'url'],
            'instagram_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'youtube_url' => ['nullable', 'url'],
            'twiter_url' => ['nullable', 'url'],
        ];
    }
}
