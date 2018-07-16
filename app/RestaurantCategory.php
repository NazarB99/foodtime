<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantCategory extends Model
{
	protected $fillable = ['name'];

	public function restaurants(  ) {
		return $this->belongsToMany('App\Restaurant');
    }
}
