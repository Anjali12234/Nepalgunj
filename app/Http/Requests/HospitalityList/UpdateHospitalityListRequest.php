<?php

namespace App\Http\Requests\HospitalityList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHospitalityListRequest extends FormRequest
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
            'details' => ['required'],
            'website_url' => ['nullable','string'],
            'email' => ['nullable','string'],
            'facebook_url' => ['required','string'],
            'youtube_link' => ['nullable','string'],
            'map_url' => ['required','string'],
            'opening_time' => ['required','string'],
            'total_rooms' => ['nullable','string'],
            'room_types' => ['nullable','string'],
            'facilities' => ['required','string'],
            'price_per_night' => ['nullable','string'],
            'average_meal_price' => ['nullable','string'],
            'menu' => ['required','string'],
            'parking_available' => ['nullable','string'],
            'delivery_available' => ['required'],
            'whats_app_no' => ['required','numeric'],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,webp'],

        ];
    }
}
