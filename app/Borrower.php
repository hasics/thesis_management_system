<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrower extends Model
{

  use SoftDeletes;

  protected $fillable = [
      'name',
      'matric_no',
      'phone_no',
      'email',
      'date',
      'thesis_id',

  ];

  protected $dates = ['deleted_at'];

  public function thesis()
    {
        return $this->belongsTo('App\Thesis');
    }
}
