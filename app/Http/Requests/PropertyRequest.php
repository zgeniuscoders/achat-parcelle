<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'height' => ['required', 'integer'],
            'width' => ['required', 'integer'],
            'details' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'status' => ['string', 'boolean'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            'images.*' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5120'],
            'quater_id' => ['required', 'integer', 'exists:quaters,id'],
            'category_id' => ['required', 'integer', 'exists:Categories,id']
        ];
    }
}
