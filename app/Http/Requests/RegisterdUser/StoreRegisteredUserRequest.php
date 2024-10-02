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
            'gender' => ['required', 'string'],
            'd_o_b' => ['required', 'date'],
            'is_active' => ['nullable','boolean'],
            'avatar' => ['nullable','image'],
            // 'main_category_id' => ['required', 'string'],

            'category' =>  ['required', 'array'],

        ];
    }
}
