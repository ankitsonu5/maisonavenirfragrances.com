<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSystemTracking extends Model
{
  use HasFactory;
  // Specify the table name
  protected $table = 'user_system_tracking';
  protected $fillable = [
    'ip_address',
    'browser',
    'browser_version',
    'platform',
    'platform_version',
    'device',
    'is_mobile',
    'is_tablet',
    'is_desktop',
    'email',
    'city',
    'state',
    'country',
    'latitude',
    'longitude',
  ];

  public function userSystemProductRanks()
  {
    return $this->hasMany(UserSystemProductRank::class, 'user_system_tracking_id');
  }

}