<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
  protected $fillable = [
  	'name', 'rating', 'website', 'description', 'adress', 'country', 'city', 'zip'
  ];

  public function facility()
  {
    return $this->hasOne('App\Facility');
  }

  public function reservation()
  {
    return $this->hasMany('App\Reservation');
  }
}
