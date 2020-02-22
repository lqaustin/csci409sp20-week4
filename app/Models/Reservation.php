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
	
	public function room() {
		return $this->belongsTo('App\Models\Room');
	}
	public function user() {
		return $this->belongsTo('App\User');
	}
}
