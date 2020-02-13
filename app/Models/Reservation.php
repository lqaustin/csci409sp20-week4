<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    //
	protected $fillable = [
		'user_id',
		'room_id',
		'num_of_guest',
		'arrival',
		'departure'
	];
	
	public function rooms() {
		return $this->hasOne('App\Models\Room');
	}
	public function users() {
		return $this->hasOne('App\User');
	}
}
