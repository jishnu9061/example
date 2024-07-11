<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountUpdateRequest extends FormRequest
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
            'charging_stations' => 'required|integer|max:1000',
            'hours_of_charging' => 'required|integer|max:1000',
            'active_users' => 'required|integer|max:1000',
            'cities' => 'required|integer|max:1000',
        ];
    }
}
