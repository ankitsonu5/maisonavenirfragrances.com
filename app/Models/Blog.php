<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'section_one',
        'section_two',
        'section_three',
        'section_four',
        'section_five',
        'section_six',
        'section_seven',
        'section_eight',
        'section_nine',
        'section_ten',
        'status',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        // Generate slug before creating a new blog
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        // Update slug before updating the blog
        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
