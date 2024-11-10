<?php

namespace App\Http\Requests\RegisterdUser;


use Illuminate\Foundation\Http\FormRequest;

class StoreRegisteredUserDetailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'map_url' => ['nullable'],
            'whats_app_number' => ['required', 'integer'],
            'establish_date' => ['required', 'date'],
            'citizenship_no' => ['nullable', 'string'],
            'citizenship_image_front' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'citizenship_image_back' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'ward_no' => ['required', 'integer'],
            'avatar' => ['nullable', 'image'],

            // 'registeredUser.avatar' => ['required', 'image', 'mimes:png,jpg,jpeg'], // Fixed the assignment operator
        ];
    }
}
