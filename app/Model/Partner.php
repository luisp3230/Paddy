<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
	use Notifiable;

    protected $table = 'partner';

    protected $primaryKey = 'id';

    protected $fillable = ['password','description','ruc','phone','address','email','logo','status'];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at'];

   	public function item(){
		return $this->hasMany('App\Model\PartnerItem', 'id_partner', 'id');
	}

   	public function store(){
		return $this->hasMany('App\Model\PartnerStore', 'id_store', 'id');
	}

}
