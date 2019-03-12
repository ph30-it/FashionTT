<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
       protected $fillable = [
        'qty', 'price', 'order_id','product_id'
    ];
        public function order()
    {
        return $this->belongTo('App\Models\Order');
    }
        public function product()
    {
        return $this->belongTo('App\Models\Product');
    }
}
