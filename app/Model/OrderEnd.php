<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderEnd extends Model
{
    //
    protected $table = 'order_end';

    protected $fillable = array('id_order','id_end', 'id_delivery','x','y','phone','address_reference');

   	protected $hidden = ['created_at', 'updated_at'];  

   	public function order(){
		return $this->belongsTo('App\Model\Order','id_order','id');
	}

   	public function detail(){
		return $this->hasMany('App\Model\OrderEndDetail', 'id_delivery', 'id_delivery');
	}

}