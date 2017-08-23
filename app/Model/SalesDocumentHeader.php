<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SalesDocumentHeader extends Model
{
    //
    protected $table = 'sales_document_header';

    protected $primaryKey = 'id_sd';

    protected $fillable = array('id_user','phone_reference','bussiness_document','sales_document','country','region','status');

   	protected $hidden = ['created_at', 'updated_at'];

   	public function user(){
		return $this->belongsTo('App\Model\User','id_user','id');
	  }

    public function detail(){
    return $this->hasMany('App\Model\SalesDocumentDetail', 'id_sd', 'id_sd');
  }    

}
