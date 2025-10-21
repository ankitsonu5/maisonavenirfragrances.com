<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayerWith extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'primary_perfume', 'layer_with_one', 'layer_with_two'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function layerOne()
    {
        return $this->belongsTo(Product::class, 'layer_with_one');
    }

    public function layerTwo()
    {
        return $this->belongsTo(Product::class, 'layer_with_two');
    }
}
