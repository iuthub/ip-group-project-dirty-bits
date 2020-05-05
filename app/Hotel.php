<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
  protected $fillable = [
  	'name', 'rating', 'type', 'website', 'description', 'adress', 'country', 'city', 'zip', 
  ];

  public function facility()
  {
    return $this->hasOne('App\Facility');
  }

  public function room()
  {
    return $this->hasMany('App\Room');
  }

}
