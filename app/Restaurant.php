<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $fillable = ['name','img', 'header'];

	public function product(  ) {
		return $this->hasMany('App\Product');
    }

	public function restaurant_categories(  ) {
		return $this->belongsToMany('App\RestaurantCategory');
    }

	public function user(  ) {
		return $this->belongsTo('App\User');
    }

	public function specefications(  ) {
		return $this->belongsToMany('App\Specefication');
	}
}
