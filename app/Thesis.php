<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
  protected $fillable = [
      'title',
      'matric_no',
      'name',
      'faculty',
      'department',
      'year',
      'abstract',
      'supervisor_id',
  ];

  public function supervisor()
    {
        return $this->belongsTo('App\Supervisor');
    }

  public function borrower()
  {
    return $this->hasMany('App\Borrower');
  }
}
