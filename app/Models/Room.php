<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
	protected $fillable = [
		'hotel_id',
		'type',
		'description',
		'price',
		'image'
	];
	
	public function hotels() {
		return $this->hasOne('App\Models\Hotel');
	}
}
