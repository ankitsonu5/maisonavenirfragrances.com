<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'image',
        'status',
        'name',
        'click'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_ingredient', 'ingredient_id', 'product_id');
    }
    /**
     * Increment the `click` value by 1.
     */
    public function incrementClick()
    {
        $this->increment('click');
    }
}
