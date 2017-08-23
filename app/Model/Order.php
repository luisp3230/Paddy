<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';

    protected $primaryKey = 'id';

    protected $fillable = array('id_user','id_courier','order_type','payment_type','status','key');

   	protected $hidden = ['created_at', 'updated_at'];

   	public function user(){
		return $this->belongsTo('App\Model\User','id_user','id');
	  }

   	public function courier(){
		return $this->belongsTo('App\Model\Courier','id_courier','id');
	  }

   	public function begin(){
		return $this->hasMany('App\Model\OrderBegin', 'id_order', 'id');
	  }

    public function begindetail(){
    return $this->hasMany('App\Model\OrderBeginDetail', 'id_order', 'id');
    }

   	public function end(){
		return $this->hasMany('App\Model\OrderEnd', 'id_order', 'id');
	  }

    public function enddetail(){
    return $this->hasMany('App\Model\OrderEndDetail', 'id_order', 'id');
    }    
}