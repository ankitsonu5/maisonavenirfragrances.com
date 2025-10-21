<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FragranceFamily extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'image',
        'status',
        'name',
        'description'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_fragrance_family');
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
