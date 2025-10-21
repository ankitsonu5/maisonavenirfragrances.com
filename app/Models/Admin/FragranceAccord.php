<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FragranceAccord extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'image',
        'status',
        'name',
        'click',
        'description'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_fragrance_accord');
    }
    /**
     * Increment the `click` value by 1.
     */
    public function incrementClick()
    {
        $this->increment('click');
    }
}
