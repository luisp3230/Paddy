<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SalesDocumentDetail extends Model
{
    //
    protected $table = 'sales_document_detail';

    protected $fillable = array('id_sd', 'id_posnr' ,'storage', 'item', 'quantity','x_source','y_source','weight','width','long','high','price1','price2','status');

    protected $hidden = ['created_at', 'updated_at'];

    public function header(){
    return $this->belongsTo('App\Model\SalesDocumentHeader','id_sd','id_sd');
    }

}