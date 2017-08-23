<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BillingDocumentHeader extends Model
{
    //
    protected $table = 'billing_document_header';

    protected $primaryKey = 'id_bd';

    protected $fillable = array('id_user','status','total_cost','currency');

   	protected $hidden = ['created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo('App\Model\User','id_user','id');
    }

    public function detail(){
    return $this->hasMany('App\Model\BillingDocumentDetail', 'id_bd', 'id_bd');
    }    
}