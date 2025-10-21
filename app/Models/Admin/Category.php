<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Category extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'name','status','order','slug'
    ];

    protected function getLogName(): string
    {
        return 'Category';
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
