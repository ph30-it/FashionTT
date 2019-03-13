<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'sale','description','category_id', 'image', 'view'
    ];
    public $timestamps = false;
    public function cate()
    {
    	return $this->belongsTo('App\Models\Category');
    }
    public function images()
    {
    	return $this->hasMany('App\Models\Image');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
        public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail');
    }
}
