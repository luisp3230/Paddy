<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShipmentDetail extends Model
{
    //
    protected $table = 'shipment_detail';
//you can have many transport for only 1 delivery detail->quantity is a part
//ooor you can have many deliveries in only one transport, thats why id_posnr_ref is not link with the other table
    protected $fillable = array('id_shipment','id_posnr','id_doc_ref','id_posnr_ref','quantity','status');

   	protected $hidden = ['created_at', 'updated_at'];

    public function header(){
    return $this->belongsTo('App\Model\ShipmentHeader','id_shipment','id_shipment');
    }

    public function reference_doc(){
    return $this->belongsTo('App\Model\DeliveryDetail','id_doc_ref','id_delivery');
    }
}