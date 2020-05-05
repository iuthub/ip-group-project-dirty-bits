<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
	protected $fillable = [
    	'concierge', 'business', 'spa', 'fitness', 'pool', 'restaurant', 'laundry', 'shuttle', 'wifi', 'beach', 'breakfast', 'pet', 'nonsmoking', 'family', 'charging'
    ];

  public function hotel()
  {
  	return $this->belongsTo('App\Hotel');
  }
}
