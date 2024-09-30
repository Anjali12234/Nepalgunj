<?php

namespace App\Http\Requests\RolePermission\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                'name' => ['required','string','max:255'],
                'email' => ['required','email'],
            // 'email' => ['nullable','string',Rule::unique('users', 'slug')->ignore($this->users)],

                'password' => ['required','string','min:5','same:confirm_password'],
                'confirm_password' => ['required'],
                'role' => ['required','array','exists:roles','name'],

        ];
    }
}
