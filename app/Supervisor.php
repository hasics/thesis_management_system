<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

  protected $fillable = [
      'name',
      'phone_no',
      'email',
  ];

  public function thesis()
  {
      return $this->hasMany('App\Thesis');
  }
}
