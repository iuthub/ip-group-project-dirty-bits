<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
	protected $fillable = [
    	'name', 'hotel_id'
    ];

  public function hotel()
  {
  	return $this->belongsTo('App\Hotel');
  }
}
