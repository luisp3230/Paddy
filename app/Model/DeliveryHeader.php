<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeliveryHeader extends Model
{
    //
    protected $table = 'delivery_header';

    protected $primaryKey = 'id_delivery';

    protected $fillable = array('delivery_type','id_user','delivery_date','picking_date','key','status');

   	protected $hidden = ['created_at', 'updated_at'];

    public function user(){
    return $this->belongsTo('App\Model\User','id_user','id');
    }

    public function detail(){
    return $this->hasMany('App\Model\DeliveryDetail', 'id_delivery', 'id_delivery');
  }    

}