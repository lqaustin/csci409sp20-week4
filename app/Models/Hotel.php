<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
	protected $fillable = [
		'name',
		'address_1',
		'description',
		'image',
		'city', 
		'state',
		'zip'
	];
	public function rooms() {
		return $this->hasMany('App\Models\Room');
	}
}
