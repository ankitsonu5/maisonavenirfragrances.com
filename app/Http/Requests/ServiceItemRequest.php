<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceItemRequest extends FormRequest
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
    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,id',
            'categorie_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'image' => 'required_without:old_image|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'time' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'service_id.required' => 'The service field is required.',
            'service_id.exists' => 'The selected service is invalid.',
            'categorie_id.required' => 'The category field is required.',
            'categorie_id.exists' => 'The selected category is invalid.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2048 kilobytes.', 
            'description.string' => 'The description must be a string.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'time.required' => 'The time field is required.',
            'time.string' => 'The time must be a string.',
            'time.max' => 'The time may not be greater than 255 characters.',
        ];
    }

}
