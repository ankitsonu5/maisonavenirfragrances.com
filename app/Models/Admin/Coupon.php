<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class Coupon extends BaseModel
{

    protected function getLogName(): string
    {
        return 'Coupon Code';
    }
    protected $fillable = ['code', 'discount','expires_at','status',];
}
