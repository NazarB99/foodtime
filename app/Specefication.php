<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specefication extends Model
{
    protected $fillable = ['name'];

	public function restaurants(  ) {
		return $this->belongsToMany('App\Restaurant');
    }
}
