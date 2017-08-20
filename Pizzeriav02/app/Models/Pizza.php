<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id','name','description','price'
  ];

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function ingredients()
  {
    return $this->belongsToMany('Ingredient');
  }


}
