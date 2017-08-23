<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Courier extends Authenticatable
{
	use Notifiable;

    protected $table = 'courier';

    protected $primaryKey = 'id';

    protected $fillable = ['password','first_name','last_name','phone','address','email','dni','status'];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at'];

   	public function order(){
		return $this->hasMany('App\Model\Order', 'id_courier', 'id');
	}

}