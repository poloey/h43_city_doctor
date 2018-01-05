<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
  protected $guarded = [];
  public function doctors()
  {
    return $this->hasMany(Doctor::class);
  }
  public function city()
  {
    return $this->belongsTo(City::class);
  }
  public function getRouteKeyName()
  {
      return 'slug';
  }
}
