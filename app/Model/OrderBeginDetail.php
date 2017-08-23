<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderBeginDetail extends Model
{
    //
    protected $table = 'order_begin_detail';

    protected $fillable = array('id_delivery', 'id_pos','type', 'item', 'quantity','price1','price2');

   	protected $hidden = ['created_at', 'updated_at'];  

    public function begin(){
    return $this->belongsTo('App\Model\OrderBegin','id_delivery','id_delivery');
    }

    public function enddetail(){
		return $this->hasMany('App\Model\OrderEndDetail', 'item', 'item');
	  }
}