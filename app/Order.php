<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['name','address','phone','content','total_price'];

	public function products(  ) {
		return $this->belongsToMany('App\Product');
    }
}
