<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderEndDetail extends Model
{
    //
    protected $table = 'order_end_detail';

    protected $fillable = array('id_delivery', 'id_pos', 'item', 'quantity');

   	protected $hidden = ['created_at', 'updated_at'];  

   	public function end(){
		return $this->belongsTo('App\Model\OrderEnd','id_delivery','id_delivery');
	  }

   	public function begindetail(){
		return $this->belongsTo('App\Model\OrderBeginDetail','item','item');
	  }
}