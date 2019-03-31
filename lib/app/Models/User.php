<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\User;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','avatar','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function commenst()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function rates()
    {
        return $this->hasMany('App\Models\Raing');
    }
}
