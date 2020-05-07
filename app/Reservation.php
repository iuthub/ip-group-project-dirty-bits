<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	public function user()
  {
  	return $this->belongsTo('App\User');
  }

  public function room()
  {
  	return $this->belongsTo('App\Room');
  }

	protected $fillable = [ 'from', 'to', 'persons', 'room_num', 'room_id', 'user_id' ];
}
