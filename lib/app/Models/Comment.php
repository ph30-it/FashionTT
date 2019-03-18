<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $fillable = [
        'content', 'user_id', 'product_id','created_at'
    ];
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
       public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
