<?php

namespace App\Http\Requests\NewsList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNewsListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'news_category_id' => ['required', 'string'],
            'title' => ['required', 'string'],
            'publisher' => ['required', 'string'],
            'publish_date' => ['required'],
            'position' => ['nullable','string'],
            'slug' => ['nullable','string',Rule::unique('news', 'slug')->ignore($this->newsList)],
            'status' => ['nullable','boolean'],
            'details' => ['required'],
            'image' => ['nullable','image'],

            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,jfif,pdf'],
        ];
    }
}
