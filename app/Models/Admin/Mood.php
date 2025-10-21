<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class Mood extends BaseModel
{

    protected $fillable = [
        'mood',
        'image',
        'order',
        'status',
        'image_new'

    ];
    protected function getLogName(): string
    {
        return 'Mood';
    }

    public function occasions()
    {
        return $this->belongsToMany(Occasion::class, 'mood_occasion');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_moods');
    }
    /**
     * Increment the `click` value by 1.
     */
    public function incrementClick()
    {
        // Check if `click` is set, if not, initialize it to 0.
        $this->click = $this->click ?? 0;

        // Increment the `click` value by 1.
        $this->click += 1;

        // Save the updated value to the database.
        $this->save();
    }
}
