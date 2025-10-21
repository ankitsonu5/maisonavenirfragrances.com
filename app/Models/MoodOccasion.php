<?php

namespace App\Models;

use App\Models\Admin\Mood;
use App\Models\Admin\Occasion;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodOccasion extends Model
{
    use HasFactory;

    protected $table = 'mood_occasion'; // Specify the table name

    protected $fillable = [
        'mood_id',
        'occasion_id',
    ];

    public function mood()
    {
        return $this->belongsTo(Mood::class);
    }

    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'mood_occasion_product');
    }
}
