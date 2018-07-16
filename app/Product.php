<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','restaurant_id', 'img'];

	public function restaurant(  ) {
		return $this->belongsTo('App\Restaurant');
    }

	public function orders(  ) {
		return $this->belongsToMany('App\Order');
    }

	public function category(  ) {
		return $this->hasOne('App\Category');
    }

}
