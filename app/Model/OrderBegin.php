<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderBegin extends Model
{
    //
    protected $table = 'order_begin';

    protected $fillable = array('id_order','id_begin', 'id_delivery' ,'x','y','phone','address_reference');

   	protected $hidden = ['created_at', 'updated_at'];  

   	public function order(){
		return $this->belongsTo('App\Model\Order','id_order','id');
	}

   	public function detail(){
		return $this->hasMany('App\Model\OrderBeginDetail', 'id_delivery', 'id_delivery');
	}

}