<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerUpdateInfoRequest extends FormRequest
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
           'user_id' => 'nullable',
           'industry_type_id' => 'nullable',
           'organization_type_id' => 'nullable',
           'team_size_id' => 'nullable',
           'name' => 'nullable',
           'slug' => 'nullable',
           'logo' => 'nullable',
           'banner' => 'nullable',
           'establishment_date' => 'nullable',
           'phone' => 'nullable',
           'email' => 'nullable',
           'website' => 'nullable',
           'bio' => 'nullable',
           'vision' => 'nullable',
           'total_views' => 'nullable',
           'address' => 'nullable',
           'city' => 'nullable',
           'state' => 'nullable',
           'country' => 'nullable',
           'map_link' => 'nullable',
        ];
    }
}
