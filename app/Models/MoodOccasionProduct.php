<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodOccasionProduct extends Model
{
    use HasFactory;
    protected $table = 'mood_occasion_product';

    protected $fillable = [
        'mood_occasion_id',
        'product_id',
    ];
    

    public $timestamps = true; // If you want timestamps
}
