<?php

namespace App\Http\Requests\RegisterdUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegisteredUserRequest extends FormRequest
{
    public function authorize(): bool
   {
        return true;
    }


    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('registered_users', 'email')],
            'password' => ['required', 'confirmed'],
            'phone_no' => ['required', 'regex:/^(?:\+?9779\d{9}|9\d{9})$/', Rule::unique('registered_users', 'phone_no')],
            'gender' => ['nullable', 'string'],
            'is_active' => ['nullable','boolean'],
            'avatar' => ['nullable','image'],
            'category' =>  ['required', 'array'],

        ];
    }
}
