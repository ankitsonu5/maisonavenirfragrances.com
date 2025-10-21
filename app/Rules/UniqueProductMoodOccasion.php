<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\MoodOccasionProduct; // Assuming this is your pivot table model

class UniqueProductMoodOccasion implements Rule
{
    public $moodOccasionId;
    public $productId;

    public function __construct($moodOccasionId, $productId)
    {
        $this->moodOccasionId = $moodOccasionId;
        $this->productId = $productId;
    }

    public function passes($attribute, $value)
    {
        return !MoodOccasionProduct::where('mood_occasion_id', $this->moodOccasionId)
            ->where('product_id', $this->productId)
            ->exists();
    }

    public function message()
    {
        return 'The combination of this product and mood occasion already exists.';
    }
}
