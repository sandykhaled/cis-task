<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ];

        // Check if the URL contains an ID (indicating an update request)
        if (preg_match('/\/category\/\d+/', $this->path())) {
            $rules = [
                'name' => 'sometimes|string|max:255',
                'description' => 'sometimes|nullable|string',
            ];
        }

        return $rules;
    }
}
