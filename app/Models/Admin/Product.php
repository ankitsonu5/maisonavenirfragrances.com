<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use App\Models\LayerWith;
use App\Models\MoodOccasion;
use Illuminate\Support\Str;

class Product extends BaseModel
{


    protected $fillable = [
        'collection_id',
        'name',
        'fragrance',
        'short_description',
        'description',
        'card_image',
        'maine_image',
        'left_image',
        'right_up_image',
        'right_dowen_image',
        'fragrance_icone',
        'fragrance_title',
        'fragrance_banner',
        'fragrance_banner_title',
        'topnote_icone',
        'topnote_title',
        'topnote_banner',
        'topnote_banner_title',
        'heartnote_icone',
        'heartnote_title',
        'heartnote_banner',
        'heartnote_banner_title',
        'basenote_icone',
        'basenote_title',
        'basenote_banner',
        'basenote_banner_title',
        'slug',
        'status',
        'created_at',
        'updated_at',
        'keywords',
        'top-notes-image',
        'aqua',
        'woody',
        'floral',
        'best_time_to_use',
        'vegan',
        'natural_oils',
        'essential_oils',
        'insiration',
        'insidethefragran',
        'fragrance_family',
        'pakking_image',
        'essential_oil',
        'top_icone',
        'heart_icone',
        'base_icone',
        'top_white_icone',
        'heart_white_icone',
        'base_white_icone',
        'meta_title',
        'meta_description',
        'hone',
        'ai_text',
        'buy_url',
        'primary_image',
        'secondary_image',
        'show_name',
        'price',
        'uk_buy_url',
        'primary_imagetwo',
        'primary_imagethree',
    ];

    public function layerWiths()
    {
        return $this->hasOne(LayerWith::class, 'product_id');
    }
    public function moodOccasions()
    {
        return $this->belongsToMany(MoodOccasion::class, 'mood_occasion_product');
    }

    // Define the relationship with the Collection model
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    protected function getLogName(): string
    {
        return 'Product';
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

    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class, 'product_ingredient', 'product_id', 'ingredient_id');
    }

    public function fragranceFamilies()
    {
        return $this->belongsToMany(FragranceFamily::class, 'product_fragrance_family', 'product_id', 'fragrance_family_id');
    }

    public function fragranceAccords()
    {
        return $this->belongsToMany(FragranceAccord::class, 'product_fragrance_accord', 'product_id', 'fragrance_accord_id');
    }



    public function moods()
    {
        return $this->belongsToMany(Mood::class, 'product_moods');
    }

    public function occasions()
    {
        return $this->belongsToMany(Occasion::class, 'product_occasions');
    }
    /**
     * Increment the `click` value by 1.
     */
    public function incrementshow()
    {
        // Check if `click` is set, if not, initialize it to 0.
        $this->show_name = $this->show_name ?? 0;

        // Increment the `click` value by 1.
        $this->show_name += 1;

        // Save the updated value to the database.
        $this->save();
    }
}
