<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMenuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'menu_id' => ['nullable', Rule::exists('menus', 'id')->withoutTrashed()],
            'title' => ['required', 'string', 'max:255'],
            'position' => ['required', 'integer'],
            'menu_type' => ['nullable', Rule::in(config('menuType'))],
            'model_id' => ['required_with:menu_type', 'integer'],
            'status' => ['nullable', 'boolean'],
            'slug' => ['required', 'alpha_dash', Rule::unique('menus', 'slug')->withoutTrashed()],
        ];
    }
}
