<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class Service extends BaseModel
{
  
    protected $fillable = [
        'name', 'slug', 'title', 'description', 'image', 'meta_title', 'meta_description', 'meta_keywords', 'tags','order','status'
      ];
   
      protected function getLogName(): string
      {
          return 'Service';
      }
  
      // relashion ship Service Item 
      public function serviceitems()
      {
          return $this->hasMany(ServiceItem::class);
      }
}
