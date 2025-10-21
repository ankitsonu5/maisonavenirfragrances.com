<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSystemProductRank extends Model
{
    use HasFactory;
    protected $table = 'user_system_product_ranks';
    protected $fillable = [
        'user_system_tracking_id',
        'rankone_product_id',
        'ranktwo_product_id',
        'rankthree_product_id',
        'preferences',
    ];

    protected $casts = [
        'preferences' => 'array', // Automatically cast JSON to array
    ];

    public function userSystemTracking()
    {
        return $this->belongsTo(UserSystemTracking::class);
    }

    public function rankOneProduct()
    {
        return $this->belongsTo(Product::class, 'rankone_product_id');
    }

    public function rankTwoProduct()
    {
        return $this->belongsTo(Product::class, 'ranktwo_product_id');
    }

    public function rankThreeProduct()
    {
        return $this->belongsTo(Product::class, 'rankthree_product_id');
    }
}
