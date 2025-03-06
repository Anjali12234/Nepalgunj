<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramRequest extends FormRequest
{
     public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:200']
        ];
    }
}
