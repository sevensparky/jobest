<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        if ($this->method('PUT' || 'PATCH'))
        {
            return [
                'user_id' => 'nullable',
                'title' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'content' => 'required',
                'image' => 'nullable',
            ];

        }else{
            return [
                'user_id' => 'nullable',
                'title' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'content' => 'required',
                'image' => 'required',
            ];
        }
    }
}
