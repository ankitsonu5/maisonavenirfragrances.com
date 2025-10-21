<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueProductMoodOccasion;

class StoreMoodOccasionProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $moodOccasionId = $this->input('moodoccasion_id');
        $productId = $this->input('product_id');

        return [
            'product_id' => ['required', 'exists:products,id', new UniqueProductMoodOccasion($moodOccasionId, $productId)],
            'moodoccasion_id' => 'required|exists:mood_occasion,id',
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Product is required.',
            'product_id.exists' => 'The selected product does not exist.',
            'moodoccasion_id.required' => 'Mood Occasion is required.',
            'moodoccasion_id.exists' => 'The selected mood occasion does not exist.',
        ];
    }
}
