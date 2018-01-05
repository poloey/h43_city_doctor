<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
  public function doctors()
  {
    return $this->hasMany(Doctor::class);
  }
}
