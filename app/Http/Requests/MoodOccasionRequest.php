<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoodOccasionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // or your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'mood_id' => 'required|exists:moods,id',
            'occasion_id' => [
                'required',
                'exists:occasions,id',
                'different:mood_id',
                function ($attribute, $value, $fail) {
                    $moodId = $this->input('mood_id');
                    $occasionId = $this->input('occasion_id');

                    if (\App\Models\MoodOccasion::where('mood_id', $moodId)->where('occasion_id', $occasionId)->exists()) {
                        $fail('The combination of mood and occasion already exists.');
                    }
                },
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'mood_id.required' => 'Mood is required',
            'mood_id.exists' => 'The selected mood is invalid',
            'occasion_id.required' => 'Occasion is required',
            'occasion_id.exists' => 'The selected occasion is invalid',
            'occasion_id.different' => 'Mood and Occasion cannot be the same',
        ];
    }
}
