<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutletUpdateRequest extends FormRequest
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
            'outlet_code' => 'required|string|max:255',
            'outlet_name' => 'required|string|max:255',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'map' => 'required|url|max:255',
            'socket_type' => 'required|string|max:255',
            'vehicles' => 'required|string|max:255',
            'amenities' => 'required|string|max:1000',
        ];
    }
}
