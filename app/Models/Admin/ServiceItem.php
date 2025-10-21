<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class ServiceItem extends BaseModel
{
    protected $fillable = [
       'service_id', 'categorie_id', 'name', 'description', 'price', 'time','image','order','status'
      ];
      protected function getLogName(): string
      {
          return 'Service Item';
      }

    // belongs to relashion ship 
    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function category(){
        return $this->belongsTo(Category::class,'categorie_id');
    }

}
