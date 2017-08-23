<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShipmentHeader extends Model
{
    //
    protected $table = 'shipment_header';

    protected $primaryKey = 'id_shipment';

    protected $fillable = array('shipment_type','courier_type', 'id_courier','route','total_distance','status');

   	protected $hidden = ['created_at', 'updated_at'];

    public function courier(){
    return $this->belongsTo('App\Model\Courier','id_courier','id');
    }

    public function detail(){
    return $this->hasMany('App\Model\ShipmentDetail', 'id_shipment', 'id_shipment');
    }    

}