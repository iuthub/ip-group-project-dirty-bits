<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	protected $fillable = [
  	'type', 'price' 
  ];

  public function hotel()
  {
    return $this->belonsTo('App\Hotel');
  }

  public function reservation()
  {
    return $this->hasMany('App\Reservation');
  }
}
