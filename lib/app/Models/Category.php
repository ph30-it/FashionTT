<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'alias', 'parent_id'
    ];
    public $timestamps = false;
    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
    
}
