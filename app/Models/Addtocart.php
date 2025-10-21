<?php

namespace App\Models;

use App\Models\Admin\ServiceItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtocart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','service_item_id','quantity','price','status'];
    public function serviceItem()
    {
        return $this->belongsTo(ServiceItem::class, 'service_item_id');
    }
}
