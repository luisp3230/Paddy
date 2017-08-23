<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BillingDocumentDetail extends Model
{
    //
    protected $table = 'billing_document_detail';
//concept type is the item or route,or another relative cost
    protected $fillable = array('id_bd','id_posnr','concept_type','concept_cost','id_doc_ref','id_posnr_ref','id_doc_ref2','id_posnr_ref2','status');

    protected $hidden = ['created_at', 'updated_at'];

    public function header(){
        return $this->belongsTo('App\Model\BillingDocumentHeader','id_bd','id_bd');
    }

    public function reference1_doc(){
    return $this->belongsTo('App\Model\DeliveryDetail','id_doc_ref','id_delivery');
    }

    public function reference1_pos(){
    return $this->belongsTo('App\Model\DeliveryDetail','id_posnr_ref','id_posnr');
    }

    public function reference2_doc(){
    return $this->belongsTo('App\Model\ShipmentDetail','id_doc_ref2','id_shipment');
    }

    public function reference2_pos(){
    return $this->belongsTo('App\Model\ShipmentDetail','id_posnr_ref2','id_posnr');
    }    
}