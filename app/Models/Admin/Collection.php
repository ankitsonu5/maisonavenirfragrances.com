<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Support\Str;

class Collection extends BaseModel
{
    // fillabel 
    protected $fillable = ['name', 'colorcode', 'status', 'order', 'slug'];


    // Define the relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected function getLogName(): string
    {
        return 'Collection';
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Generate slug before creating a new category
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        // Update slug before updating the category
        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
