<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $fillable = [
		'name',
		'alias',
		'parent_id'
	];

	// public function products(){
	// 	return $this->hasMany('App\products');
	// }
}
