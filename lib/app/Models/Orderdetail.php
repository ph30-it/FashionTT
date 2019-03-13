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
        return $this->belongsTo('App\Models\Order');
    }
        public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
