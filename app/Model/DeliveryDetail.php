<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeliveryDetail extends Model
{
    //
    protected $table = 'delivery_detail';
//storage es el lugar de origen .... tienda, negocio, etc
    protected $fillable = array('id_delivery','id_posnr','item','quantity','x_destination','y_destination','x_start','y_start','id_doc_ref','id_posnr_ref','status');

   	protected $hidden = ['created_at', 'updated_at'];

   	public function header(){
		return $this->belongsTo('App\Model\DeliveryHeader','id_delivery','id_delivery');
	  }

    public function reference_doc(){
    return $this->belongsTo('App\Model\SalesDocumentDetail','id_doc_ref','id_sd');
    }

    public function reference_pos(){
    return $this->belongsTo('App\Model\SalesDocumentDetail','id_posnr_ref','id_posnr');
    }   
}