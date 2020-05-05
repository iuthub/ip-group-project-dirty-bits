<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	public function user()
  {
  	return $this->belongsTo('App\User');
  }

  public function hotel()
  {
  	return $this->belongsTo('App\Hotel');
  }

	protected $fillable = [ 'from', 'to', 'persons' ];
}
