<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'address', 'cty', 'zip_code','country','phone','status','total','user_id'
    ];
    public function user()
    {
        return $this->belongTo('App\Models\User');
    }
    public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail');
    }
}
